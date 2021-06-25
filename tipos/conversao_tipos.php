<div class="titulo">Conversão Tipos</div>

<?php

// int para float
echo is_int(PHP_INT_MAX);
echo '<br>';
var_dump(PHP_INT_MAX + 1); // float
echo '<br>';
var_dump(1 + 1.1);
echo '<br>';
var_dump((float) 3);
echo '<br>';

// float para int - pode perder informação
var_dump((int) 6.8);
echo '<br>';
var_dump(intval(2.8, 10)); // base 10 (posso omitir o dez)
echo '<br>';
var_dump(intval('000000111', 2)); // base 2
echo '<br>';
var_dump(round(2.8)); // float
echo '<br>';
var_dump((int) round(2.8)); // int
echo '<br>';

// operações com string
var_dump(3 + "2");
echo '<br>';
var_dump("3" + 2);
echo '<br>';

var_dump(3 . "2");

echo '<br>', is_string(2 . '3');
echo '<br>';

var_dump(1 + "cinco"); // ignora o 'cinco'
echo '<br>';
var_dump(1 + "5 cinco"); //6
echo '<br>';
var_dump(1 + "2 + 133"); //3
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");
echo '<br>';