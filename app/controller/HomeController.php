<?php
 
class HomeController extends Controller
{
 
    public function index()
    {
        $dados = array();
       
        $dados['titulo'] = "HOME";
 
        $this->carregarViews('home',$dados);
    }
}