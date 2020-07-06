<?php
include('../includes/head.php');
?>

<!-- Body -->

<body class="exercicio">
    <!-- # Body -->
    <!-- Cabeçalho -->
    <header class="cabecalho">
        <h1>Curso PHP 7</h1>
        <h2>Visualização do Exercicio</h2>
    </header> <!-- # Cabeçalho -->

    <!-- Conteúdo Principal -->
    <nav class="navegacao">
        <a href="#" class="verde">Sem Formatação</a>
        <a href="#" class="vermelho">Voltar</a>
    </nav> <!-- # Conteúdo Principal -->
    <!-- Conteúdo Principal - Main -->
    <main class="principal">
        <div class="conteudo">
            <?php 
            include('../teste/teste.php');
            // include($_GET['dir'] . "/teste.php");
            // include($_GET['dir'] . "/" . $_GET['file'] . ".php");
            // include("{$_GET['dir']}/{$_GET['file']}.php");
            // include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");            
        ?>
        </div>
    </main>

    <?php
include('../includes/footer.php');
?>