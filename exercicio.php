<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="recursos/css/estilo.css" />
    <link rel="stylesheet" href="recursos/css/exercicio.css" />
    <title>Exercício</title>
  </head>
  <body class="exercicio">
    <header class="cabecalho">
      <h1>Curso PHP</h1>
      <h2>Visualização do exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
      <div class="conteudo">
            <?php 
                //include('teste/teste.php');
                //include($_GET['dir'] . "/teste.php");
                //http://localhost:3000/exercicio.php?dir=teste&file=teste
                //include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                //include("{$_GET['dir']}/{$_GET['file']}.php");
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>                  
      </div>
    </main>
    <footer class="rodape">THIAGO &copy; <?= date('Y'); ?></footer>
    
  </body>
</html>
