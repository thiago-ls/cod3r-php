<div class="titulo">Variáveis Variáveis</div>

<?php

$a = 'valorA';
$$a = 'valorAA';

echo $a;
echo '<br>';

echo "$a $$a";
echo '<br>';

echo "$a {$$a}";
echo '<br>';

echo "$a {$$a} ${$a} $valorA";
echo '<br>';

$epa = 'opa';
$opa = 'vish';
echo "$epa";
echo '<br>';

echo "${$epa}";