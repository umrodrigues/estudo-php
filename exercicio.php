<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos\css\estilo.css">
    <link rel="stylesheet" href="recursos\css\exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">  
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header> 
    <nav class="navegacao">
        <a href="index.php" class="vermelho">Voltar</a>
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a> 
    </nav>
        <main class="principal">
            <div class="conteudo">
                <?php               
                    //include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                    //include($_GET['dir'] . "/teste.php");
                    include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");

               ?>
            </div>
        </main>
    <footer class="rodape">
        Vai luãn, o brabo! <?= date('Y'); ?>
    </footer>
</body>
</html>

