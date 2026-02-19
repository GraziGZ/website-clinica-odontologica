<?php
 
class Controller{
 
    public function carregarViews($views, $dados = array()){
 
        extract ($dados);
 
        require_once '../app/view/'.$views.'.php';
    }
}