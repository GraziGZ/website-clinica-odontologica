<!DOCTYPE html>
<html lang="pt-br">

<?php require_once("estrutura/head.php") ?>
<link rel="stylesheet" href="<?php URL_BASE ?>assets/css/login.css">

<body>
    <main>
        <div>
            <form id="login" action="<?php echo URL_BASE ?>index.php?url=login/autenticar" method="POST">
                <?php if (!empty($dados['erro_login'])): ?>
                    <div class="mensagem-erro">
                        <p><?= $dados['erro_login']; ?></p>
                    </div>
                <?php elseif (!empty($dados['msg_sucesso'])): ?>
                    <div class="mensagem-sucesso">
                        <p><?= $dados['msg_sucesso']; ?></p>
                    </div>
                <?php endif; ?>

                <h1>Login Administrador</h1>
                <div class="login">
                    <p>E-mail:</p>
                    <input type="email" id="email" name="email" placeholder="Informe seu e-mail" required>
                    <p>Senha:</p>
                    <input type="password" id="senha" name="senha" placeholder="Informe sua senha" required>
                </div>
                    <div class="button">
                        <!-- DIRECIONA PARA A PAGINA DASHBOARD (DO ADMIN) -->
                        <button type="submit">Entrar</button>
                        <!--REDIRECIONA PARA A PAGINA HOME -->
                        <p><a href="<?php echo URL_BASE ?>index.php?url=home">Cancelar</a></p>
                    </div>
                <p><a href="<?php echo URL_BASE ?>index.php?url=recuperar">Esqueci minha senha</a></p>
            </form>
        </div>
    </main>
</body>

</html>