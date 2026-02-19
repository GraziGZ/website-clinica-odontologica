<?php
 
class DashController extends Controller
{
 
    public function index()
    {
        //Carrega os models
        $clienteModel = new Cliente();
        $servicoModel = new Servico();
        $agendamentoModel = new Agendamento();
        $contatoEmailModel = new ContatoEmail();
 
        //Pega os totais
        $totalClientes = $clienteModel->contarClientes();
        $totalServicos = $servicoModel->contarServicos();
        $totalAgendamentos = $agendamentoModel->contarAgendamentos();
        $totalContatos = $contatoEmailModel->contarContatos();
 
        $dados = array();
 
        $dados['titulo'] = "DASHBOARD";
        $dados['totalClientes'] = $totalClientes;
        $dados['totalServicos'] = $totalServicos;
        $dados['totalAgendamentos'] = $totalAgendamentos;
        $dados['totalContatos'] = $totalContatos;
 
        $this->carregarViews('admin/dash',$dados);
    }
}