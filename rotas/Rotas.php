<?php
 
class Rotas
{
    // Método responsável por processar e executar as rotas da aplicação
    public function executar()
    {
        // Define a URL inicial como "/"
        $url = '/';
        // Se existir o parâmetro "url" na requisição GET, adiciona ao valor inicial
        if(isset($_GET['url'])){
            $url .= $_GET['url'];
        }
 
        // Inicializa o array de parâmetros que poderão ser passados para o método do controller
        $parametro = array();
 
        // Verifica se a URL não está vazia e não é apenas "/"
        if (!empty($url) && $url != '/'){
 
            // Quebra a string da URL em partes, usando "/" como separador
            $url = explode('/', $url);
 
            // Remove o primeiro item do array (que será vazio por causa da "/" inicial)
            array_shift($url);
 
            // Define o nome do controller com base no primeiro item da URL
            // Ex: "produto" vira "ProdutoController"
            $controladorAtual = ucfirst($url[0]) . 'Controller';
 
            // Remove o primeiro item do array (que já foi usado como controller)
            array_shift($url);
 
            // Verifica se existe uma ação na URL (ex: listar, editar, etc.)
            if (isset($url[0]) && !empty($url[0])){
                $acaoAtual = $url[0]; // A ação será o segundo segmento da URL
                array_shift($url); // Remove a ação da URL
            } else {
                // Caso não seja passado, a ação padrão será "index"
                $acaoAtual = 'index';
            }
 
            // Se ainda existirem valores no array, eles serão considerados como parâmetros
            if (count($url) > 0){
                $parametro = $url;
            }
        } else {
            // Caso não haja nenhuma URL informada, define o padrão
            $controladorAtual = 'HomeController';
            $acaoAtual = 'index';
        }
 
        // Verifica se o arquivo do controller existe e se o método da ação é válido
        if(!file_exists('../app/controller/'.$controladorAtual.'.php') || !method_exists($controladorAtual, $acaoAtual))
        {
            // Caso não exista, exibe uma mensagem de erro (útil para debug)
            echo 'ESTOU AQUI - Não existe o '.$controladorAtual.' e nem a ação atual: '.$acaoAtual;
 
            // Define o controlador de erro e a ação padrão
            $controladorAtual = 'ErroController';
            $acaoAtual = 'index';
        }
 
        // Cria uma instância do controller definido
        $controller = new $controladorAtual();
 
        // Executa o método (ação) do controller, passando os parâmetros da URL
        call_user_func_array(array($controller,$acaoAtual),$parametro);
    }
}