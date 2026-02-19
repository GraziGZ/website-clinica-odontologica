<?php
 
class ProfessoresController extends Controller
{
 
    public function index()
    {
        $dados = array();
       
        $dados['titulo'] = "PROFESSORES";
 
        $this->carregarViews('professores',$dados);
    }
}