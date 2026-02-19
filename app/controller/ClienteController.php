<?php
 
class ClienteController extends Controller
{
    public function index()
    {
        $dados = array();
 
        $modelCliente = new Cliente(); //instanciar a model Cliente
        $dados['clientes'] = $modelCliente->listarClientes();
        $dados['titulo'] = "Clientes";
         
        // Carrega o layout do dash, mas dizendo que o conteúdo interno será a view cliente
        $dados['conteudo'] = 'admin/cliente/cliente';
        // var_dump($dados['clientes']);    
        // exit;
        $this->carregarViews('admin/dash', $dados);
    }
 
    public function inserirCliente()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome_cliente'];
            $telefone = $_POST['telefone_cliente'];
            $email = $_POST['email_cliente'];
            $data_nasc = $_POST['nasc_cliente'];
            $status = $_POST['status_cliente'];
 
            $modelCliente = new Cliente();
            $modelCliente->inserirCliente($nome, $telefone, $email, $data_nasc, $status);
 
            header("Location: " . URL_BASE . "index.php?url=cliente");
            exit;
        }
    }
 
    public function deletarCliente()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $clienteModel = new Cliente();
            $clienteModel->deletarCliente($id);
 
            //Redireciona de volta para a lista
            header("Location: " . URL_BASE . "index.php?url=cliente");
            exit;
        }
    }
 
    public function atualizarCliente()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = [
                'id_cliente' => $_POST['id_cliente'],
                'nome_cliente' => $_POST['nome_cliente'],
                'telefone_cliente' => $_POST['telefone_cliente'],
                'email_cliente' => $_POST['email_cliente'],
                'nasc_cliente' => $_POST['nasc_cliente'],
                'status_cliente' => $_POST['status_cliente']
            ];
            $clienteModel = new Cliente();
 
            if($clienteModel->atualizar($dados)) {
                // Após atualizar, recarrega a lista
                $clientes = $clienteModel->listarClientes();
 
                $dados = [
                    'servicos' => $clientes,
                    'msg' => 'Cliente atualizado com sucesso!'
                ];
                header("Location: " . URL_BASE . "index.php?url=cliente");
                exit;
            } else {
                echo "<script>alert('Erro ao atualizar cliente!');</script>";
            }
        }
    }
}
 