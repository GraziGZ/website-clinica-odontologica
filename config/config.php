<?php

//Utilizar o define() para criar constantes

//Definir a raiz do projeto
define('URL_BASE', 'https://4semestre.ubsistema.com.br/projeto/ProjetoOdont/ProjetoOdontologia/public/'); //alterarado para o caminho do servidor do prof

/******************************************/
/*             BANCO DE DADOS             */
/******************************************/

//SERVIDOR
define('DB_HOST', 'br61-cp.valueserver.com.br');
define('DB_NAME', 'alve6465_ub_odonto1');
define('DB_USER', 'alve6465_ub_odonto1');
define('DB_PASS', 'Odonto1@123');

//LOCAL
/*define('DB_HOST', 'localhost');
define('DB_NAME', 'alve6465_ub_odonto1');
define('DB_USER', 'root'); 
define('DB_PASS', '');
*/
//Sistema para carregamento automático das classes
spl_autoload_register(
    function ($class) {
        //se tem uma classe .php no caminho
        if (file_exists('../app/controller/' . $class . '.php')) {
            require_once '../app/controller/' . $class . '.php';
        }

        if (file_exists('../app/model/' . $class . '.php')) {
            require_once '../app/model/' . $class . '.php';
        }

        if (file_exists('../rotas/' . $class . '.php')) {
            require_once '../rotas/' . $class . '.php';
        }
    }
);
