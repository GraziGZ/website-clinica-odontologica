<?php
 
class CursoController extends Controller
{
 
    public function index()
    {
        $dados = array();
       
        $dados['titulo'] = "CURSO";
 
        $this->carregarViews('curso',$dados);
    }
}