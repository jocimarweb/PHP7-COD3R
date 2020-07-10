<?php
include('../includes/head.php');
?>

<body class="exercicio">
    <!-- Cabeçalho -->
    <header class="cabecalho">
        <h1>Curso PHP 7</h1>
        <h2>Visualização do Exercicio</h2>
    </header> <!-- # Cabeçalho -->

    <!-- Nav -->
    <nav class="navegacao">
        <a href="../teste/teste.php" class="verde">Sem Formatação</a>
        <a href="../index.php" class="vermelho">Voltar</a>
    </nav> <!-- # Nav -->

    <!-- Conteúdo Principal - Main -->
    <main class="principal">
        <div class="conteudo">
            <?php 
            include('../teste/teste.php');
        ?>
        </div>
    </main> <!-- # Conteúdo Principal - Main -->

    <?php
    include('../includes/footer.php');
    ?>