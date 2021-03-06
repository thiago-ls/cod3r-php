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
    <title>Curso PHP</title>
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
            <h3>Básico</h3>
            <ul>
              <!-- <li><a href="exercicio.php?dir=teste&file=teste">Exercício A</a></li> -->
              <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
              <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
              <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
              <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários</a></li>
              <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>              
            </ul>
          </div>
          <div class="modulo vermelho">
            <h3>Tipos</h3>
            <ul>
              <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>              
              <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>              
              <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</a></li>              
              <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a></li>              
              <li><a href="exercicio.php?dir=tipos&file=strings">Strings</a></li>              
              <li><a href="exercicio.php?dir=tipos&file=desafio_strings">Desafio Strings</a></li>              
              <li><a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>              
              <li><a href="exercicio.php?dir=tipos&file=conversao_tipos">Conversão Tipos</a></li>              
            </ul>
          </div>

          <div class="modulo azul">
            <h3>Variáveis</h3>
            <ul>
              <li><a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a></li>              
              <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a></li>              
              <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>              
              <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>              
              <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis Variáveis</a></li>              
              <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis_variaveis">Desafio Variáveis Variáveis</a></li>              
              <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referência</a></li>              
              <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>              
            </ul>
          </div>
         
        </nav>
      </div>
    </main>
    <footer class="rodape">THIAGO &copy; <?= date('Y'); ?></footer>
    
  </body>
</html>
