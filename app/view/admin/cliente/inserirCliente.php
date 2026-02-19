<!-- CLIENTE -->     
<form id="form-clientes" class="data-form" method="POST" action="<?= URL_BASE ?>index.php?url=cliente/inserirCliente">
    <input type="hidden" name="id_cliente">
 
    <input type="text" name="nome_cliente" placeholder="Nome" required>
    <input type="text" name="telefone_cliente" placeholder="Telefone" required>
    <input type="email" name="email_cliente" placeholder="E-mail" required>
    <input type="date" name="nasc_cliente" placeholder="Data de Nascimento" required>
 
    <select name="status_cliente" required>
        <option value="ATIVO">ATIVO</option>
        <option value="INATIVO">INATIVO</option>
    </select>
 
    <button type="submit">Salvar</button>
    <button type="button" onclick="showTable('clientes')">Cancelar</button>
</form>