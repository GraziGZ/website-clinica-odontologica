<!-- CRIÇÃO DA ESTRUTURA DO DASH (AREA DO ADMIN) -->

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>
    <?php require_once('estrutura/head.php'); ?>
    <!-- FAZ A CHAMADA DO HEAD PARA A ESTRUTURAÇÃO DA PÁGINA DASH (ADMINISTRADOR) -->

    <link rel="stylesheet" href="<?php URL_BASE ?>assets/css/dash.css">
    <!-- FAZ A CHAMADA DO ESTILO PARA A ESTILIZAÇÃO (CSS) DA PÁGINA DASH (ADMINISTRADOR) -->

</head>

<body>
    <div class="dashboard">

        <!-- Menu Lateral -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <!-- DEFINIR A FOTO DO USUÁRIO DO ADMINISTRADOR -->
                <img src="<?php URL_BASE ?>assets/img/adm.png" alt="Foto do usuário" class="user-photo">

                <p>Administrador</p>
                <h3> Deltrano Silva</h3>
                <button id="logout" onclick="window.location.href='<?= URL_BASE ?>index.php?url=home'">
                    <img src="<?php URL_BASE ?>assets/img/dash/logout.png"  alt="logout">
                </button>
            </div>

            <!-- DECLARAÇÃO DAS PÁGINAS DE ACESSO AOS DADOS DE CADASTRO DO CLIENTE -->
            <ul class="menu">
                <a href="<?= URL_BASE ?>index.php?url=dash">
                    <li>Dashboard</li>
                </a>

                <a href="<?= URL_BASE ?>index.php?url=cliente">
                    <li>Clientes</li>
                </a>

                <a href="<?= URL_BASE ?>index.php?url=contatoEmail">
                    <li>Contatos</li>
                </a>

                <a href="<?= URL_BASE ?>index.php?url=servico">
                    <li>Serviços</li>
                </a>

                <a href="<?= URL_BASE ?>index.php?url=agendamento">
                    <li>Agendamento</li>
                </a>
            </ul>
        </nav>

        <!-- CONTEÚDO CENTRAL (CONTAGEM DOS CONTEÚDOS CADASTRADOS) PAGINA INICIAL DO DASH-->
        <main class="main-content">

            <?php

            if (isset($conteudo)) {

                $this->carregarViews($conteudo, $dados);
                /* CHAMAR A CONTAGEM DE CADASTROS, VISIVEL NA PAGINA INICIAL DO DASH */
            } else {
            ?>

                <!-- INICIO - DEFINIÇÃO DOS CARDS INICIAIS -->
                <div class="cards-container">
                    <div class="card">
                        <h2>Clientes</h2>
                        <p><?= $totalClientes ?></p>
                    </div>

                    <div class="card">
                        <h2>Contatos</h2>

                        <p><?= $totalContatos ?></p>
                    </div>

                </div>

                <div class="cards-container">
                    <div class="card">
                        <h2>Agendamentos</h2>
                        <p><?= $totalAgendamentos ?></p>
                    </div>

                    <div class="card">
                        <h2>Serviços</h2>
                        <p><?= $totalServicos ?></p>
                    </div>

                </div>
                
                <!-- FIM - DEFINIÇÃO DOS CARDS INICIAIS -->
            <?php

            }
            ?>

        </main>
    </div>

    <!-- Rodapé -->
    <footer>
        Desenvolvido por: 4USALL - ADS - Universidade Brasil - 2025
    </footer>

    <!-- CHAMADA DO JAVASCRIPT DO ADMIN, PARA VISUALIZAÇÃO DAS TABELAS -->
    <script src="<?php URL_BASE ?>assets/js/admin.js"></script>
</body>

</html>