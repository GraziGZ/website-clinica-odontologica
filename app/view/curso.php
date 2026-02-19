<!DOCTYPE html>
<html lang="pt-br">

<?php require_once("estrutura/head.php") ?>
<link rel="stylesheet" href="<?php URL_BASE ?>assets/css/curso.css">

<body>
    <!--Inicio cabeçalho-->
    <header id="home">
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

    <!-- Inicio do CURSO -->
    <main>
        <section class="curso" id="curso">
            <article class="site">
                <h2>Grade Estudantil</h2>
                <div>
                    <div>
                        <h3>1º Semestre</h3>
                        <h4>Anatomia Humana</h4>
                        <h4>Histologia e Embriologia</h4>
                        <h4>Bioquímica</h4>
                        <h4>Introdução à Odontologia</h4>
                        <h4>Saúde Coletiva</h4>
                        <h4>Ética e Bioética</h4>
                    </div>
                    <div>
                        <h3>2º Semestre</h3>
                        <h4>Fisiologia Humana</h4>
                        <h4>Microbiologia e Imunologia</h4>
                        <h4>Anatomia da Cabeça e Pescoço</h4>
                        <h4>Psicologia Aplicada à Saúde</h4>
                        <h4>Biossegurança</h4>
                        <h4>Odontologia em Saúde Coletiva I</h4>
                    </div>
                    <div>
                        <h3>3º Semestre</h3>
                        <h4>Patologia Geral</h4>
                        <h4>Farmacologia</h4>
                        <h4>Radiologia Odontológica</h4>
                        <h4>Materiais Odontológicos</h4>
                        <h4>Semiologia Odontológica</h4>
                        <h4>Odontologia em Saúde Coletiva II</h4>
                    </div>
                    <div>
                        <h3>4º Semestre</h3>
                        <h4>Patologia Bucal</h4>
                        <h4>Clínica Integrada Pré-Clínica I</h4>
                        <h4>Dentística (Teoria e Pré-Clínica)</h4>
                        <h4>Periodontia (Teoria e Pré-Clínica)</h4>
                        <h4>Oclusão e ATM</h4>
                        <h4>Anestesiologia</h4>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>5º Semestre</h3>
                        <h4>Clínica Integrada Pré-Clínica II</h4>
                        <h4>Dentística Restauradora</h4>
                        <h4>Periodontia Clínica</h4>
                        <h4>Endodontia (Teoria e Pré-Clínica)</h4>
                        <h4>Cirurgia Bucomaxilofacial I (Teoria)</h4>
                        <h4>Estomatologia</h4>
                    </div>
                    <div>
                        <h3>6º Semestre</h3>
                        <h4>Clínica Integrada I (Início do atendimento a pacientes)</h4>
                        <h4>Endodontia Clínica</h4>
                        <h4>Prótese Parcial Removível</h4>
                        <h4>Cirurgia Bucomaxilofacial II (Clínica)</h4>
                        <h4>Odontopediatria (Teoria e Clínica)</h4>
                        <h4>Odontologia Legal</h4>
                    </div>
                    <div>
                        <h3>7º Semestre</h3>
                        <h4>Clínica Integrada II</h4>
                        <h4>Prótese Fixa</h4>
                        <h4>Prótese Total</h4>
                        <h4>Ortodontia (Teoria e Laboratório)</h4>
                        <h4>Pacientes com Necessidades Especiais</h4>
                        <h4>Pesquisa em Odontologia (Metodologia Científica)</h4>
                    </div>
                    <div>
                        <h3>8º Semestre</h3>
                        <h4>Clínica Integrada III</h4>
                        <h4>Clínica Odontopediátrica</h4>
                        <h4>Clínica de Reabilitação Oral</h4>
                        <h4>Ortodontia Clínica</h4>
                        <h4>Odontogeriatria</h4>
                        <h4>TCC I (Trabalho de Conclusão de Curso)</h4>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>9º Semestre</h3>
                        <h4>Clínica Integrada IV (ênfase em casos complexos)</h4>
                        <h4>Estágio Supervisionado em Saúde Coletiva</h4>
                        <h4>Estágio em Urgência Odontológica</h4>
                        <h4>TCC II</h4>
                        <h4>Gestão e Empreendedorismo em Odontologia</h4>
                    </div>
                    <div>
                        <h3>10º Semestre</h3>
                        <h4>Clínica Integrada Final</h4>
                        <h4>Estágio Supervisionado em Ambulatórios e Hospitais</h4>
                        <h4>Odontologia Hospitalar</h4>
                        <h4>Revisão e Atualização Clínica</h4>
                        <h4>Apresentação do TCC</h4>
                        <h4>Avaliação de Competências e Habilidades</h4>
                    </div>
                    <div>
                        <h3>Laboratórios</h3>
                        <h4>Laboratório 1 - disponível para 2° e 4° semestre</h4>
                        <h4>Laboratório 2 - disponível para 6° e 8° semestre</h4>
                        <h4>Laboratório 3 - disponível para 9° e 10° semestre</h4>
                    </div>
                </div>
            </article>
        </section>
    </main>

    <!--Fim CONTEÚDO-->

    <!--Inicio rodapé-->
    <footer>
        <section class="rodape">
            <p>Desenvolvido pelo grupo 4USALL - ADS - Universidade Brasil - 2025</p>
        </section>
    </footer>
    <!--Fim rodapé-->
</body>

</html>