<?php
$titulo = 'Seja Voluntário';
include 'includes/header.php';
?>

<main>

    <!-- =========================
         FORMULÁRIO VOLUNTÁRIO
    ========================== -->

    <section class="volunteer-form-section">

        <div class="container volunteer-form-content">

            <span class="section-tag">
                SEJA VOLUNTÁRIO
            </span>

            <h1>
                Quero ser voluntário
            </h1>

            <p>
                Preencha o formulário abaixo e entraremos em contato
                para te mostrar como você pode ajudar.
            </p>

            <form class="volunteer-form" action="#" method="post">

                <div class="form-group">
                    <label for="nome">Nome completo</label>
                    <input
                        type="text"
                        id="nome"
                        name="nome"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="contato">E-mail ou telefone</label>
                    <input
                        type="text"
                        id="contato"
                        name="contato"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="area">Área de interesse</label>
                    <select id="area" name="area" required>
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option value="alimentos">Doações de alimentos</option>
                        <option value="familias">Apoio às famílias</option>
                        <option value="geral">Voluntariado geral</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Enviar
                </button>

            </form>

        </div>

    </section>

</main>

<?php include 'includes/footer.php'; ?>
