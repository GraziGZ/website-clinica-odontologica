<form id="form-agendamentos" class="data-form" method="POST" action="<?= URL_BASE ?>index.php?url=agendamento/inserirAgendamento">
    <input type="hidden" name="id_agendamento">
 
    <div>
        <select name="id_cliente" required>
    <option value="">Selecione o Cliente</option>
    <?php if (!empty($clientes)): ?>
        <?php foreach($clientes as $cliente): ?>
            <?php if ($cliente['status_cliente'] !== 'ATIVO') continue; ?>
            <option value="<?= $cliente['id_cliente'] ?>"><?= $cliente['nome_cliente'] ?></option>
        <?php endforeach; ?>
    <?php endif; ?>
</select>
 
    </div>
 
    <select name="id_servico" required>
        <option value="">Selecione o Serviço</option>
        <?php if (!empty($servicos)): ?>
            <?php foreach($servicos as $servico): ?>
                <option value="<?= $servico['id_servico'] ?>"><?= $servico['nome_servico'] ?></option>
            <?php endforeach; ?>
        <?php endif; ?>
    </select>
 
    <input type="date" name="data_agendamento" placeholder="Data do Agendamento" required>
    <input type="time" name="hora_agendamento" placeholder="Horário do Agendamento" required>
 
    <select name="status_agendamento" required>
        <option value="ATIVO">ATIVO</option>
        <option value="INATIVO">INATIVO</option>
    </select>
 
    <input type="text" name="obs_agendamento" placeholder="Observações" >
 
    <button type="submit">Salvar</button>
    <button type="button" onclick="showTable('agendamentos')">Cancelar</button>
</form>
 