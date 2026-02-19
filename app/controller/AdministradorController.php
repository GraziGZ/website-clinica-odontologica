<?php
 
class AdmController extends Controller
{
    public function index()
    {
        $dados = array();
 
        $modelAdministrador = new Administrador(); //instanciar a model Administrador
        $dados['titulo'] = "Administrador";

        // Carrega o layout do dash, mas dizendo que o conteúdo interno será a view funcionário
        $dados['conteudo'] = 'admin/administrador/administrador';
        // var_dump($dados['administradors']);
        // exit;
        $this->carregarViews('admin/dash', $dados);
    }
   
}