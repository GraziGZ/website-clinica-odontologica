<!DOCTYPE html>
<html lang="pt-br">

<?php require_once("estrutura/head.php") ?>

<body>
    <?php require_once("template/header.php") ?>

    <main>
        <section class="site" id="contato">

            <h2>Contato</h2>

            <p>Para que possamos realizar o primeiro contato e agendar uma possível triagem, pedimos que preencha todos os campos abaixo com atenção:</p>

            <h5>*Nome completo</h5>
            <h5>*E-mail</h5>
            <h5>*Telefone</h5>
            <h5>*Mensagem (informe brevemente o motivo do contato ou sua necessidade)</h5>

            <p>Nossa equipe retornará o mais breve possível para dar continuidade ao atendimento.</p>

            <h6>Horário de atendimento: segunda a sexta-feira, das 8h às 18h.</h6>

            <form class="contato-form" action="email.php" method="POST">
                <div>
                    <label>Nome Completo*</label>
                    <input type="text" name="nome" placeholder="Nome" required>

                    <label>E-Mail*</label>
                    <input type="email" name="email" placeholder="E-mail" required>

                    <label>Telefone/Celular*</label>
                    <input type="tel" name="telefone" placeholder="Telefone" required>
                </div>

                <div>
                    <label>Mensagem*</label>
                    <textarea name="mensagem" placeholder="Mensagem" rows="5" required></textarea>

                    <div>
                        <button type="submit">Enviar</button>
                        <button type="reset">Limpar</button>
                    </div>
                </div>
            </form>

        </section>
    </main>

    <!--Chamada do footer-->
    <?php require_once("template/footer.php") ?>

   <!-- jQuery (necessário antes do script.js) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Caminho correto do script.js considerando a pasta do servidor -->
    <script src="/projeto/ProjetoOdont/ProjetoOdontologia/public/assets/js/script.js"></script>

</body>
</html>
