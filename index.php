<?php
$titulo = 'Início';
include 'includes/header.php';
?>

<main>

    <!-- =========================
         HERO
    ========================== -->

    <section class="hero">

        <div class="hero-background">

            <img
                src="img/banner.jpeg"
                alt="Voluntários da Associação Doe Amor e Gere Esperança"
            >

        </div>

        <div class="hero-overlay"></div>

        <div class="container hero-content">

            <div class="hero-text">

                <span class="hero-tag">
                    ASSOCIAÇÃO
                </span>

                <h1>
                    Juntos podemos
                    <strong>transformar vidas</strong>
                </h1>

                <p>
                    Acreditamos no poder da solidariedade,
                    do voluntariado e da união para construir
                    um futuro melhor para todos.
                </p>

                <div class="hero-buttons">

                    <a
                        href="voluntarios.php"
                        class="btn btn-primary"
                    >
                        ❤️ Quero ser voluntário
                    </a>

                    <a
                        href="acoes.php"
                        class="btn btn-secondary"
                    >
                        Conheça nossas ações →
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         SOBRE
    ========================== -->

    <section class="about-section">

        <div class="container about-content">

            <div class="about-image">

                <div class="image-placeholder small">

                    <span>
                        Foto da associação
                    </span>

                    <small>
                        Podemos colocar uma foto real aqui
                    </small>

                </div>

            </div>

            <div class="about-text">

                <span class="section-tag">
                    Sobre nós
                </span>

                <h2>
                    Um projeto feito para ajudar quem ajuda
                </h2>

                <p>
                    A Associação Doe Amor e Gere Esperança
                    desenvolve ações voltadas ao apoio e à
                    transformação da comunidade.
                </p>

                <p>
                    Nosso objetivo é aproximar pessoas que
                    querem ajudar das iniciativas realizadas
                    pela associação, facilitando a participação
                    de voluntários e a divulgação das ações.
                </p>

                <a
                    href="sobre.php"
                    class="text-link"
                >
                    Conheça nossa história →
                </a>

            </div>

        </div>

    </section>


    <!-- =========================
         AÇÕES
    ========================== -->

    <section class="actions-section">

        <div class="container">

            <div class="section-header">

                <span class="section-tag">
                    NOSSAS AÇÕES
                </span>

                <h2>
                    Pequenos gestos, grandes impactos
                </h2>

                <p>
                    Conheça algumas das ações realizadas
                    pela associação e faça parte dessa
                    corrente do bem.
                </p>

            </div>


            <div class="action-cards">


                <!-- CARD 1 -->

                <article class="action-card">

                    <div class="card-image">

                        <div class="card-placeholder">
                            ❤️
                        </div>

                    </div>

                    <div class="card-content">

                        <span class="card-icon">
                            🛍️
                        </span>

                        <h3>
                            Doações de alimentos
                        </h3>

                        <p>
                            Arrecadamos e distribuímos
                            alimentos para famílias em
                            situação de vulnerabilidade.
                        </p>

                        <a href="acoes.php">
                            Saiba mais →
                        </a>

                    </div>

                </article>


                <!-- CARD 2 -->

                <article class="action-card">

                    <div class="card-image">

                        <div class="card-placeholder">
                            🤝
                        </div>

                    </div>

                    <div class="card-content">

                        <span class="card-icon">
                            👨‍👩‍👧‍👦
                        </span>

                        <h3>
                            Apoio às famílias
                        </h3>

                        <p>
                            Oferecemos suporte e orientação
                            para quem mais precisa, sempre
                            com respeito e carinho.
                        </p>

                        <a href="acoes.php">
                            Saiba mais →
                        </a>

                    </div>

                </article>


                <!-- CARD 3 -->

                <article class="action-card">

                    <div class="card-image">

                        <div class="card-placeholder">
                            💙
                        </div>

                    </div>

                    <div class="card-content">

                        <span class="card-icon">
                            ❤️
                        </span>

                        <h3>
                            Voluntariado
                        </h3>

                        <p>
                            Junte-se a nós! Seu tempo,
                            seu talento e sua solidariedade
                            podem fazer toda a diferença.
                        </p>

                        <a href="voluntarios.php">
                            Quero participar →
                        </a>

                    </div>

                </article>

            </div>

        </div>

    </section>


    <!-- =========================
         VOLUNTARIADO
    ========================== -->

    <section class="volunteer-section">

        <div class="container volunteer-content">

            <div>

                <span class="section-tag">
                    FAÇA PARTE
                </span>

                <h2>
                    Uma pequena atitude pode
                    transformar uma história
                </h2>

                <p>
                    Seja voluntário e participe das ações
                    da Associação Doe Amor e Gere Esperança.
                </p>

            </div>

            <a
                href="voluntarios.php"
                class="btn btn-light"
            >
                Quero ser voluntário
            </a>

        </div>

    </section>


    <!-- =========================
         CONTATO
    ========================== -->

    <section class="contact-section">

        <div class="container contact-content">

            <div class="section-header">

                <span class="section-tag">
                    ENTRE EM CONTATO
                </span>

                <h2>
                    Quer saber mais?
                </h2>

                <p>
                    Entre em contato com a associação
                    e conheça melhor o nosso trabalho.
                </p>

            </div>

            <div class="contact-buttons">

                <a
                    href="https://wa.me/5544999842047"
                    target="_blank"
                    class="contact-button"
                >
                    WhatsApp
                </a>

                <a
                    href="mailto:doeamoregereesperanca2026@gmail.com"
                    class="contact-button"
                >
                    E-mail
                </a>

            </div>

        </div>

    </section>

</main>

<?php include 'includes/footer.php'; ?>