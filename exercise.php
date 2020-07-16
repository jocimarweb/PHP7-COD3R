<?php
include 'head.php';
?>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP 7</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <!-- Nav -->
    <nav class="navegacao">
        <a href= <?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">
            Sem formatação
        </a>
        <a href="index.php" class="vermelho">
            Voltar
        </a>
    </nav>     <!-- # Nav -->
    <!-- Conteúdo Principal - Main -->    
    <main class="principal">
        <div class="conteudo">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main> <!-- # Conteúdo Principal - Main -->

    <?php
    include'footer.php';
    ?>