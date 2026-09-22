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
                    O que fazemos
                </h1>

                <p>
                    Conheça de perto as ações realizadas pela
                    associação e como cada uma delas transforma
                    a vida de quem mais precisa.
                </p>

            </div>


            <div class="action-cards">

                <!-- AÇÃO 1 -->

                <article class="action-card">

                    <div class="card-image">

                        <div class="card-placeholder" aria-hidden="true">
                            ❤️
                        </div>

                    </div>

                    <div class="card-content">

                        <span class="card-icon" aria-hidden="true">
                            🛍️
                        </span>

                        <h3>
                            Doações de alimentos
                        </h3>

                        <p>
                            Arrecadamos alimentos não perecíveis com
                            a comunidade e montamos cestas básicas
                            que são entregues periodicamente a
                            famílias em situação de vulnerabilidade
                            social, garantindo que ninguém passe
                            fome na nossa região.
                        </p>

                        <a href="voluntarios.php">
                            Quero ajudar →
                        </a>

                    </div>

                </article>


                <!-- AÇÃO 2 -->

                <article class="action-card">

                    <div class="card-image">

                        <div class="card-placeholder" aria-hidden="true">
                            🤝
                        </div>

                    </div>

                    <div class="card-content">

                        <span class="card-icon" aria-hidden="true">
                            👨‍👩‍👧‍👦
                        </span>

                        <h3>
                            Apoio às famílias
                        </h3>

                        <p>
                            Oferecemos orientação e acompanhamento
                            a famílias em situação de vulnerabilidade,
                            ajudando no acesso a serviços básicos,
                            direitos e apoio emocional, sempre com
                            respeito e escuta.
                        </p>

                        <a href="voluntarios.php">
                            Quero ajudar →
                        </a>

                    </div>

                </article>


                <!-- AÇÃO 3 -->

                <article class="action-card">

                    <div class="card-image">

                        <div class="card-placeholder" aria-hidden="true">
                            💙
                        </div>

                    </div>

                    <div class="card-content">

                        <span class="card-icon" aria-hidden="true">
                            ❤️
                        </span>

                        <h3>
                            Voluntariado
                        </h3>

                        <p>
                            Formamos uma rede de voluntários que
                            doam seu tempo e talento para apoiar
                            as demais ações da associação, desde
                            a organização de eventos até o
                            atendimento direto às famílias.
                        </p>

                        <a href="voluntarios.php">
                            Quero participar →
                        </a>

                    </div>

                </article>

                <!--
                    Pra adicionar uma nova ação, copie um dos blocos
                    <article class="action-card">...</article> acima
                    e troque o emoji, o título e o texto. O grid se
                    ajusta sozinho (3 colunas, depois 2, depois 1
                    no celular).
                -->

            </div>

        </div>

    </section>

</main>

<?php include 'includes/footer.php'; ?>