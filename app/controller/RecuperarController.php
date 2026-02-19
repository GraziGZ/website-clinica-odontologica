<?php
 
class RecuperarController extends Controller
{
 
    public function index()
    {
        $dados = array();
       
        $dados['titulo'] = "RECUPERAR SENHA";
 
        // Pega mensagens e limpa a sessão após exibir
        if (isset($_SESSION['msg_erro'])) {
            $dados['msg_erro'] = $_SESSION['msg_erro'];
            unset($_SESSION['msg_erro']);
        }
 
        $this->carregarViews('recuperar',$dados);
    }
}