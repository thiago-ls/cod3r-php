<div class="titulo">Atribuições</div>

<?php

$title = "Atribuições";

$numero = 10;
$numero -= 5;
$numero = $numero + 12.5;
$numero--;
--$numero;
echo $numero . '<br>';

// $variavelInexistente = 'valor existente';
// echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default';
echo '<br>' . $valor;
