<section id="servicos" class="screen active">
    <h2>Serviços</h2>
    <div class="buttons">
        <button onclick="showTable('servicos')">Listar</button>
        <button onclick="showForm('servicos')">Cadastrar</button>
    </div>
    <!-- Tabela -->
     <?php require_once('listarServico.php'); ?>
     <?php require_once('inserirServico.php'); ?>
</section>