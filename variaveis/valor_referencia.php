<div class="titulo">Valor vs Referência</div>

<?php

$variavel = 'valor inicial';
echo $variavel, '<br>';

// atribuição por valor
$variavelValor = $variavel; // cópia por valor, ocupa dois endereços de memória
echo $variavelValor, '<br>';
$variavelValor = 'novo valor';

echo $variavel, '<br>';
echo $variavelValor, '<br>';

// atribuição por referencia
$variavelReferencia = &$variavel; // ambas apontam para o mesmo endereço de memória
$variavelReferencia = 'mesma referencia';
echo "$variavel $variavelReferencia";
