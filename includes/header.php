<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $titulo ?? 'Doe Amor e Gere Esperança'; ?></title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header class="site-header">

    <div class="container header-content">

        <a href="index.php" class="logo">

            <div class="logo-image">
                <img
                    src="img/logo.jpeg"
                    alt="Doe Amor e Gere Esperança"
                >
            </div>

            <div class="logo-text">
                <strong>Doe Amor e Gere Esperança</strong>
                <span>
                    <span aria-hidden="true">📍</span> Astorga-Paraná
                </span>
            </div>

        </a>

        <nav class="menu">

            <a href="index.php">
                Início
            </a>

            <a href="sobre.php">
                Sobre
            </a>

            <a href="acoes.php">
                Ações
            </a>

            <a href="voluntarios.php" class="menu-cta">
                Seja Voluntário
            </a>

            <a href="index.php#contato">
                Contato
            </a>

        </nav>

    </div>

</header>
