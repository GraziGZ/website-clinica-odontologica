<!DOCTYPE html>
<html lang="pt-br">

<?php require_once("estrutura/head.php") ?>
<link rel="stylesheet" href="<?php URL_BASE ?>assets/css/professores.css">

<body>
    <!--Inicio cabeçalho-->

    <header id="professores">
        <section class="site">
            <article>
                <button class="abrirMenu"><!--Menu--></button>
                <nav>
                    <button class="fecharMenu"><!--FecharMenu--></button>
                    <ul>
                        <li><a href="<?php URL_BASE ?>index.php?url=home">Inicio</a></li>
                        <li><a href="<?php URL_BASE ?>index.php?url=professores">Professores</a></li>
                        <li><a href="<?php URL_BASE ?>index.php?url=curso">Curso</a></li>
                        <li><a href="<?php URL_BASE ?>index.php?url=contato">Contato</a></li>
                        <li><a href="<?php URL_BASE ?>index.php?url=login"><img src="assets/img/login.png" alt="login"></a></li>
                        <!-- referência ao login.html, para o usuario ser direcionado a pagina de login -->
                    </ul>
                </nav>
            </article>
        </section>
    </header>
    <!--Fim cabeçalho-->

    <!--Inicio CONTEÚDO-->

    <!-- Inicio dos PROFESSORES do curso-->
    <main>
        <!--Ajustar Banner -->
       <!-- <section class="bannersProfessores"> 
            <img src="assets/img/banner_beatriz.png" alt="Beatriz">
            <img src="assets/img/banner_grazielly.png" alt="Grazielly">
            <img src="assets/img/banner_henrique.png" alt="Henrique">
            <img src="assets/img/banner_leticia.png" alt="Leticia">
        </section> -->

        <section class="equipe">
            <article class="site">
                <h2>Professores</h2>
                <div>
                    <section>
                        <div>
                            <h3>Beatriz</h3>
                            <h4>Cirurgiã</h4>
                            <img src="assets/img/beatriz.png" alt="Beatriz">
                        </div>
                        <div>
                            <p>Especializada em Cirurgia Bucomaxilofacial, a Dra. Beatriz atua no diagnóstico e
                                tratamento de traumas, deformidades e patologias complexas da face, como fraturas,
                                cistos e
                                tumores. Realiza procedimentos de alta precisão, incluindo cirurgias ortognáticas
                                (correção
                                de deformidades ósseas) e implantes dentários avançados, integrando saúde funcional e
                                estética. Com expertise em reconstrução facial pós-trauma ou câncer, alia tecnologia 3D
                                e
                                planejamento digital para resultados personalizados. Seu foco é restaurar não apenas
                                sorrisos, mas qualidade de vida, com abordagem humanizada e multidisciplinar.</p>
                        </div>
                    </section>
                </div>
                <div>
                    <section>
                        <div>
                            <h3>Grazielly</h3>
                            <h4>Anestesista</h4>
                            <img src="assets/img/grazziely.png" alt="Grazziely">
                        </div>
                        <div>
                            <p>Especializada em sedação consciente e anestesia odontológica, a Dra. Grazziely garante
                                conforto e segurança em procedimentos cirúrgicos bucais, como extrações complexas e
                                implantes. Domina técnicas avançadas de bloqueio nervoso e controle de ansiedade,
                                adaptando protocolos para pacientes com necessidades especiais ou fobias. Seu trabalho
                                permite tratamentos indolores e eficientes, reduzindo traumas e melhorando a experiência
                                clínica.</p>
                        </div>
                    </section>
                </div>
                <div>
                    <section>
                        <div>
                            <h3>Henrique</h3>
                            <h4>Endodontista</h4>
                            <img src="assets/img/henrique.png" alt="Henrique">
                        </div>
                        <div>
                            <p>Com expertise em tratamento de canal, o Dr. Henrique atua no diagnóstico e solução de
                                infecções pulpares, utilizando microscopia operatória e técnicas de desinfecção
                                avançada. Seu trabalho preserva dentes naturais, evitando extrações, com procedimentos
                                precisos e minimamente invasivos. Focado em alívio da dor e recuperação funcional, alia
                                tecnologia e abordagem humanizada para resultados duradouros.</p>
                        </div>
                    </section>
                </div>
                <div>
                    <section>
                        <div>
                            <h3>Letícia</h3>
                            <h4>Ortodontista</h4>
                            <img src="assets/img/leticia.png" alt="Leticia">
                        </div>
                        <div>
                            <p>Com expertise em alinhamento dentofacial, a Dra. Letícia corrige má oclusões e harmoniza
                                sorrisos usando técnicas como aparelhos fixos, alinhadores invisíveis e ortopedia
                                funcional. Seu trabalho vai além da estética, melhorando função mastigatória e saúde
                                bucal, com planos personalizados para crianças, adolescentes e adultos. Combinando
                                tecnologia digital e abordagem humanizada, transforma sorrisos com resultados precisos e
                                duradouros.</p>
                        </div>
                    </section>
                </div>
            </article>
        </section>
    </main>

    <footer>
        <section class="rodape">
            <p>Desenvolvido pelo grupo 4USALL - ADS - Universidade Brasil - 2025</p>

        </section>
    </footer>

    <!-- script não se coloca no cabeçario é sempre antes de fechar o body -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- substituir o jquery pela versão atual (site jquery) -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>

    <!-- substituir o jquery migrate pela versão atual (site jquery) -->
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <!-- meu arquivo js depois de todos os scripts (sempre por ultimo)-->
    <script type="text/javascript" src="js/script.js"></script>

</body>

</html>