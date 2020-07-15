<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS - Google (link) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Oswald:wght@200;300;400;500;600;700&family=Raleway&family=Roboto&display=swap"
        rel="stylesheet">

    <!-- CSS - Personalizado -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercise.css">

    <title>Curso PHP 7 - COD3R </title>
</head> <!-- # Head -->

<!-- Body -->
<body>
    <!-- # Body -->
    <!-- Cabeçalho -->
    <header class="cabecalho">
        <h1>Curso PHP 7</h1>
        <h2>Índice dos Exercícios</h2>
    </header> <!-- # Cabeçalho -->

    <!-- Conteúdo Principal -->
    <main class="principal">
        <div class="conteudo">
            <!-- Nav - Modulos -->
            <nav class="modulos">

                <!-- Nav - Modulo 01 -->
                <div class="modulo verde">
                    <h3>Módulo 01</H3>
                    <ul>
                        <li>
                            <a href="exercicise.php?dir=basico&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicise.php?dir=basico&file=html">
                                Integração HTML - PHP
                            </a>
                        </li>
                    </ul>
                </div> <!-- # Nav - Modulo 01 -->

            </nav> <!-- # Nav - Modulos -->
        </div>
    </main> <!-- # Conteúdo Principal -->

    <!-- Rodapé  -->
    <footer class="rodape">
        COD3R & ALUNOS &copy; <?= date('Y'); ?>
    </footer> <!-- # Rodapé  -->
</body> <!-- Body -->

</html>