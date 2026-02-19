<?php
 
class LoginController extends Controller
{
 
    public function index()
    {
        $dados = array();
       
        $dados['titulo'] = "LOGIN";
 
        // Pega mensagens e limpa a sessão após exibir
        if (isset($_SESSION['erro_login'])) {
            $dados['erro_login'] = $_SESSION['erro_login'];
            unset($_SESSION['erro_login']);
        }
 
        if (isset($_SESSION['msg_sucesso'])) {
            $dados['msg_sucesso'] = $_SESSION['msg_sucesso'];
            unset($_SESSION['msg_sucesso']);
        }
 
        $this->carregarViews('login',$dados);
    }
 
    // Autenticar o login
    public function autenticar()
{
    if (!empty($_POST['email']) && !empty($_POST['senha'])) {

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $administradorModel = new Administrador();
        $administrador = $administradorModel->autenticar($email, $senha);

        if ($administrador) {
            $_SESSION['administrador'] = $administrador;
            header("Location: " . URL_BASE . "index.php?url=dash");
            exit;
        } else {
            $_SESSION['erro_login'] = "E-mail ou senha inválidos.";
            header("Location: " . URL_BASE . "index.php?url=login");
            exit;
        }
    }
}
 
    // Recuperar a senha
    public function atualizarSenha()
    {
        if (!empty($_POST['email']) && !empty($_POST['senha1']) && !empty($_POST['senha2'])) {
            $email = $_POST['email'];
            $senha1 = $_POST['senha1'];
            $senha2 = $_POST['senha2'];
 
            $administradorModel = new Administrador();
            $resultado = $administradorModel->recuperarSenha($email, $senha1, $senha2);
 
            if ($resultado === true) {
                $_SESSION['msg_sucesso'] = "Senha alterada com sucesso! Faça login novamente.";
                header("Location: " . URL_BASE . "index.php?url=login");
                exit;
            } else {
                $_SESSION['msg_erro'] = $resultado;
                header("Location: " . URL_BASE . "index.php?url=recuperar");
                exit;
            }
        }
    }
}
 