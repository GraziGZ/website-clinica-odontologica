

<?php
 
class AgendamentoController extends Controller
{
    public function index()
    {
        $dados = array();
 
        $modelAgendamento = new Agendamento(); //instanciar a model Agendamento
 
        $modelCliente = new Cliente(); //ACRESCENTAR A BUSCA PELO MODEL CLIENTE
        $modelServico = new Servico(); //ACRESCENTAR A BUSCA PELO MODEL SERVICO
 
        $dados['agendamentos'] = $modelAgendamento->listarAgendamentos();
        $dados['clientes'] = $modelCliente->listarClientes(); //CHAMAR OS CLIENTES EXISTENTES NO BANCO
        $dados['servicos'] = $modelServico->listarServicos(); //CHAMAR OS SERVICOS EXISTENTES NO BANCO
        $dados['titulo'] = "Agendamentos";
 
        // Carrega o layout do dash, mas dizendo que o conteúdo interno será a view agendamento
        $dados['conteudo'] = 'admin/agendamento/agendamento';
        // var_dump($dados['agendamentos']);
        // exit;
        $this->carregarViews('admin/dash', $dados);
    }
 
    public function inserirAgendamento()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_cliente = $_POST['id_cliente'];
            $id_servico = $_POST['id_servico'];
            $data = $_POST['data_agendamento'];
            $hora = $_POST['hora_agendamento'];            
            $status = $_POST['status_agendamento'];
            $observacao = $_POST['obs_agendamento'];
 
            $modelAgendamento = new Agendamento();
            $modelAgendamento->inserirAgendamento($id_cliente, $id_servico, $data, $hora, $status, $observacao); //$id_funcionario,
 
            header("Location: " . URL_BASE . "index.php?url=agendamento");
            exit;
        }
    }
 
    public function deletarAgendamento()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $agendamentoModel = new Agendamento();
            $agendamentoModel->deletarAgendamento($id);
 
            //Redireciona de volta para a lista
            header("Location: " . URL_BASE . "index.php?url=agendamento");
            exit;
        }
    }
 
    public function atualizarAgendamento()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = [
                'id_agendamento' => $_POST['id_agendamento'],
                'id_cliente' => $_POST['id_cliente'],
                'id_servico' => $_POST['id_servico'],
                'data' => $_POST['data_agendamento'],
                'hora' => $_POST['hora_agendamento'],
                'status_agendamento' => $_POST['status_agendamento'],
                'observacao' => $_POST['obs_agendamento']
            ];
            $agendamentoModel = new Agendamento();
            $clienteModel = new Cliente();
            $servicoModel = new Servico();
 
            if($agendamentoModel->atualizar($dados)) {
                // Após atualizar, recarrega a lista
                $agendamentos = $agendamentoModel->listarAgendamentos();
                $clientes = $clienteModel->listarClientes();
                $servicos = $servicoModel->listarServicos();
 
                $dados = [
                    'agendamentos' => $agendamentos,
                    'clientes' => $clientes,
                    'servicos' => $servicos,
                    'msg' => 'Agendamento atualizado com sucesso!'
                ];
                header("Location: " . URL_BASE . "index.php?url=agendamento");
                exit;
            } else {
                echo "<script>alert('Erro ao atualizar agendamento!');</script>";
            }
        }
    }
}