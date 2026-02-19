<?php

class ContatoController extends Controller
{

    public function index()
    {
        $dados = array();

        $dados['titulo'] = "CONTATO";

        $this->carregarViews('contato',$dados);
    }
}