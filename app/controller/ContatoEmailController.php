<!-- FAZER A VALIDAÇÃO DO ENVIO DO EMAIL DE CONTATO -->

<?php
 
class ContatoEmailController extends Controller
{
    public function index()
    {
        $dados = array();
 
        $modelContatoEmail = new ContatoEmail(); //instanciar a model ContatoEmail
        $dados['contatos'] = $modelContatoEmail->listarContatos();
        $dados['titulo'] = "Contatos";
 
        //Carrega o layout do dash, mas dizendo que o conteúdo interno será a view contato email
        $dados['conteudo'] = 'admin/contato/contato';
        $this->carregarViews('admin/dash', $dados);
    }
 
    public function deletarContato()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $contatoEmailModel = new ContatoEmail();
            $contatoEmailModel->deletarContato($id);
           
            //Redireciona de volta para a lista
            header("Location: " . URL_BASE . "index.php?url=contatoEmail");
            exit;
        }
    }
 
   public function atualizarStatusContato()
    {
        if (!isset($_GET['id'])) {
            header('Location: ' . URL_BASE . 'index.php?url=contatoEmail');
            exit;
        }
        $id = $_GET['id'];
        $contatoEmailModel = new ContatoEmail();
        $contatoEmailModel->atualizarStatusContato($id);
        header('Location: ' . URL_BASE . 'index.php?url=contatoEmail');
        exit;
    }
}