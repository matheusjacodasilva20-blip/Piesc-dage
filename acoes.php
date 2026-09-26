<?php
$titulo = 'Nossas Ações';
include 'includes/header.php';
?>

<main>

    <!-- =========================
         AÇÕES
    ========================== -->

    <section class="actions-section">

        <div class="container">

            <div class="section-header">

                <span class="section-tag">
                    NOSSAS AÇÕES
                </span>

                <h1>
                    Juntos fazendo a diferença
                </h1>

                <p>
                    A Associação Doe Amor e Gere Esperança realiza
                    ações que ajudam pessoas e famílias em situação
                    de vulnerabilidade. Conheça algumas das
                    iniciativas realizadas pela associação.
                </p>

            </div>


            <div class="action-cards">

                <!-- AÇÃO 1 -->

                <article class="action-card">

                    <div class="card-image">

                        <img
                            src="img/sopao.png"
                            alt="Voluntários preparando o Sopão Solidário"
                        >

                    </div>

                    <div class="card-content">

                        <span class="card-icon" aria-hidden="true">
                            🍲
                        </span>

                        <h3>
                            Sopão Solidário
                        </h3>

                        <p>
                            O Sopão é uma das ações realizadas pela
                            associação para levar alimento e
                            acolhimento às pessoas que precisam de
                            apoio. A equipe participa da preparação e
                            distribuição dos alimentos em diferentes
                            locais, buscando levar solidariedade
                            diretamente à comunidade.
                        </p>

                        <span class="action-meta">
                            <span aria-hidden="true">📍</span> Jardim das Torres
                        </span>

                    </div>

                </article>


                <!-- AÇÃO 2 -->

                <article class="action-card">

                    <div class="card-image">

                        <img
                            src="img/festa-criancas.jpeg"
                            alt="Voluntária entregando doces para uma criança na Festa das Crianças"
                        >

                    </div>

                    <div class="card-content">

                        <span class="card-icon" aria-hidden="true">
                            🎉
                        </span>

                        <h3>
                            Festa das Crianças
                        </h3>

                        <p>
                            Em parceria com a Prefeitura, a
                            associação participou de uma ação
                            especial para proporcionar um dia de
                            diversão e carinho para as crianças, com
                            atividades no Horto e no Ginásio de
                            Esportes.
                        </p>

                        <p>
                            <strong>Distribuído no dia:</strong>
                        </p>

                        <ul class="action-list">
                            <li>Cachorro-quente</li>
                            <li>Pipoca e pipoca doce</li>
                            <li>Bolo</li>
                            <li>Balas e pirulitos</li>
                            <li>Bolas e brinquedos</li>
                        </ul>

                    </div>

                </article>


                <!-- AÇÃO 3 -->

                <article class="action-card">

                    <div class="card-image">

                        <img
                            src="img/fraldas-geriatricas.png"
                            alt="Equipe da associação no Instituto Cocamar, em Maringá, parceiro do projeto de fraldas geriátricas"
                        >

                    </div>

                    <div class="card-content">

                        <span class="card-icon" aria-hidden="true">
                            🩹
                        </span>

                        <h3>
                            Projeto de Fraldas Geriátricas
                        </h3>

                        <p>
                            A associação participa de um projeto,
                            junto com outras quatro entidades, que
                            produz e distribui fraldas geriátricas
                            para pessoas cadastradas em situação de
                            vulnerabilidade, em parceria com a
                            Cocamar, em Maringá.
                        </p>

                        <span class="action-stat">
                            1.200 fraldas/mês
                        </span>

                    </div>

                </article>

                <!--
                    Pra adicionar uma nova ação, copie um dos blocos
                    <article class="action-card">...</article> acima
                    e troque o emoji, o título e o texto.
                -->

            </div>

        </div>

    </section>


    <!-- =========================
         UNIÃO QUE TRANSFORMA
    ========================== -->

    <section class="volunteer-section">

        <div class="container volunteer-content">

            <div>

                <span class="section-tag">
                    UNIÃO QUE TRANSFORMA
                </span>

                <h2>
                    Quando ajudamos juntos, conseguimos ir mais
                    longe.
                </h2>

                <p>
                    As ações da associação também acontecem por meio
                    de parcerias e da união com outras entidades e
                    pessoas que acreditam na solidariedade. Cada
                    ação representa uma oportunidade de ajudar,
                    acolher e fazer a diferença na vida de alguém.
                </p>

                <p>
                    Quer fazer parte dessa transformação? Você
                    também pode contribuir com as ações da
                    associação através do voluntariado e de outras
                    formas de apoio.
                </p>

            </div>

            <a
                href="voluntarios.php"
                class="btn btn-light"
            >
                <span aria-hidden="true">❤️</span> Quero ser voluntário
            </a>

        </div>

    </section>

</main>

<?php include 'includes/footer.php'; ?>
