<section id="agendamento" class="screen active">
    <h2>Agendamento</h2>
    <div class="buttons">
        <button onclick="showTable('agendamentos')">Listar</button>
        <button onclick="showForm('agendamentos')">Cadastrar</button>
    </div>
    <!-- Tabela -->
     <?php require_once('listarAgendamento.php'); ?>
     <?php require_once('inserirAgendamento.php'); ?>
</section>