<!-- CLIENTE -->

<section id="clientes" class="screen active">
    <h2>Clientes</h2>
    <div class="buttons">
        <button onclick="showTable('clientes')">Listar</button>
        <button onclick="showForm('clientes')">Cadastrar</button>
    </div>
    <!-- Tabela -->
     <?php require_once('listarCliente.php'); ?>
     <?php require_once('inserirCliente.php'); ?>
</section>