<!DOCTYPE html>
<html lang="pt-br">

<?php require_once("estrutura/head.php") ?> <!-- chamando o head -->

<body>
    <!--Inicio CABEÇALHO-->
    <?php require_once("template/header.php") ?>
    <!--Inicio CONTEÚDO-->

    <main>
        <!-- inicio LOGO -->
        <?php require_once("template/logo.php") ?>

        <!-- Inicio do SOBRE com as informações do curso -->
        <?php require_once("template/sobre.php") ?>

        <!-- Inicio dos DIFERENCIAIS do curso -->
        <?php require_once("template/diferenciais.php") ?>
    </main>

    <!--Inicio RODAPÉ -->
    <?php require_once("template/footer.php") ?>

    <!--chamada dos scripts js -->
    <?php require_once("estrutura/script.php") ?>
</body>

</html>