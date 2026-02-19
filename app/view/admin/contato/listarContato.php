<!-- CONTATO -->
<table id="table-contatos" class="data-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Mensagem</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($contatos)): ?>
            <?php foreach ($contatos as $contato): ?>
                <tr>
                    <td><?= $contato['id_contato'] ?></td>
                    <td><?= $contato['nome_contato'] ?></td>
                    <td><?= $contato['email_contato'] ?></td>
                    <td><?= $contato['telefone_contato'] ?></td>
                    <td><?= $contato['mensagem_contato'] ?></td>
                    <td>
                        <a href="<?= URL_BASE ?>index.php?url=contatoEmail/deletarcontato&id=<?= $contato['id_contato'] ?>"
                        class="deletar"
                        onclick="return confirm('Deseja realmente excluir este contato? Esta ação não pode ser desfeita!')">
                        Excluir
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Nenhum contato encontrado.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
 