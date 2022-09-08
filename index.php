<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="recursos\css\estilo.css">
    <title>Index Curso PHP</title>
</head>
<body>  
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos exercícios</h2>
    </header> 
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Vai luãn, o brabo! <?= date('Y'); ?>
    </footer>
</body>
</html>
