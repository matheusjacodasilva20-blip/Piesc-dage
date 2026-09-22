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

            <div class="volunteer-intro">

                <span class="volunteer-icon" aria-hidden="true">
                    🤝
                </span>

                <span class="section-tag">
                    SEJA VOLUNTÁRIO
                </span>

                <h1>
                    Quero ser voluntário
                </h1>

                <p>
                    Preencha o formulário abaixo e entraremos em
                    contato para te mostrar como você pode ajudar.
                </p>

            </div>

            <?php if (isset($_GET['sucesso'])): ?>
                <div class="form-message form-message-success">
                    Recebemos seu interesse! Em breve entraremos em
                    contato. Obrigado por querer ajudar. 💛
                </div>
            <?php endif; ?>

            <?php if (isset($_GET['erro'])): ?>
                <div class="form-message form-message-error">
                    Não foi possível enviar. Confira os campos e
                    tente novamente.
                </div>
            <?php endif; ?>

            <div class="volunteer-form-card">

                <form class="volunteer-form" action="#" method="post">

                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input
                            type="text"
                            id="nome"
                            name="nome"
                            placeholder="Como podemos te chamar?"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="contato">E-mail ou telefone</label>
                        <input
                            type="text"
                            id="contato"
                            name="contato"
                            placeholder="Pra gente entrar em contato"
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
                            <option value="outra">Outra</option>
                        </select>
                    </div>

                    <div class="form-group form-group-hidden" id="grupo-area-outra">
                        <label for="area_outra">Conte pra gente como você quer ajudar</label>
                        <input
                            type="text"
                            id="area_outra"
                            name="area_outra"
                            placeholder="Ex: apoio jurídico, fotografia, transporte..."
                        >
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Quero me inscrever →
                    </button>

                </form>

            </div>

            <script>
                const formVoluntario = document.querySelector('.volunteer-form');

                // TEMPORÁRIO: por enquanto o formulário só mostra a
                // mensagem de sucesso, sem enviar e-mail de verdade.
                // Quando o envio real estiver pronto, remova este bloco
                // e volte a usar action="processar-voluntario.php" no <form>.
                formVoluntario.addEventListener('submit', function (evento) {
                    evento.preventDefault();
                    window.location.href = 'voluntarios.php?sucesso=1';
                });
                const selectArea = document.getElementById('area');
                const grupoOutra = document.getElementById('grupo-area-outra');
                const inputOutra = document.getElementById('area_outra');

                selectArea.addEventListener('change', function () {
                    const escolheuOutra = selectArea.value === 'outra';

                    grupoOutra.classList.toggle('form-group-hidden', !escolheuOutra);
                    inputOutra.required = escolheuOutra;

                    if (escolheuOutra) {
                        inputOutra.focus();
                    }
                });
            </script>

        </div>

    </section>

</main>

<?php include 'includes/footer.php'; ?>
