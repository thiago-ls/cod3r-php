<div class="titulo">Constantes</div>

<?php

// forma 1
define('TAXA_DE_JUROS', 5.9); 
echo TAXA_DE_JUROS, '<br>';
//TAXA_DE_JUROS = 2.5; // não pode ser alterado


// forma 2
const NOVA_TAXA = 2.5;
echo NOVA_TAXA, '<br>';

$valorVariavel = 2.8;
//define('NOVISSIMA_TAXA', $valorVariavel); // Válido
//const NOVISSIMA_TAXA = $valorVariavel; // Inválido
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo "<br>" . NOVISSIMA_TAXA;

// Outras constantes
echo '<br>' . PHP_VERSION;
echo '<br> Linha: ' . __LINE__;
echo '<br> Arquivo: ' . __FILE__;
echo '<br> Pasta: ' . __DIR__;