<?php
 
class ServicoController extends Controller
{
    public function index()
    {
        $dados = array();
 
        $modelServico = new Servico(); //instanciar a model Servico
 
 
        $dados['servicos'] = $modelServico->listarServicos();
        $dados['titulo'] = "Servicos";
 
        //Carrega o layout do dash, mas dizendo que o conteúdo interno será a view servico
        $dados['conteudo'] = 'admin/servico/servico';
        //var_dump($dados['servicos']);
        //exit;
        $this->carregarViews('admin/dash', $dados);
    }
 
    public function inserirServico()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome_servico'];
            $descricao = $_POST['desc_servico'];
            $duracao = $_POST['duracao_servico'];
            $preco = $_POST['preco_servico'];
            $status = $_POST['status_servico'];
 
            $modelServico = new Servico();
            $modelServico->inserirServico($nome, $descricao, $duracao, $preco, $status); 
 
            header("Location: " . URL_BASE . "index.php?url=servico");
            exit;
        }
    }
 
    public function deletarServico()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $servicoModel = new Servico();
            $servicoModel->deletarServico($id);
 
            //Redireciona de volta para a lista
            header("Location: " . URL_BASE . "index.php?url=servico");
            exit;
        }
    }
 
    public function atualizarServico()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = [
                'id_servico' => $_POST['id_servico'],
                'nome_servico' => $_POST['nome_servico'],
                'desc_servico' => $_POST['desc_servico'],
                'duracao_servico' => $_POST['duracao_servico'],
                'preco_servico' => $_POST['preco_servico'],
                'status_servico' => $_POST['status_servico']
            ];
            $servicoModel = new Servico();
 
            if($servicoModel->atualizar($dados)) {
                // Após atualizar, recarrega a lista
                $servicos = $servicoModel->listarServicos();
 
                $dados = [
                    'servicos' => $servicos,
                    'msg' => 'Serviço atualizado com sucesso!'
                ];
                header("Location: " . URL_BASE . "index.php?url=servico");
                exit;
            } else {
                echo "<script>alert('Erro ao atualizar serviço!');</script>";
            }
        }
    }
}
 