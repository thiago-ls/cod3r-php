<div class="titulo">Strings</div>

<?php

echo "Eu sou uma string";
echo '<br>';

var_dump("Eu também");
echo '<br>';

var_dump('E Eu também');
echo '<br>';

echo "'teste'";
echo '<br>';

echo '"teste"';
echo '<br>';

echo "\\barra \t\t\ttab \nnova linha";
echo '<br>';

print("<h4>Hello</h4>");
print "<h4>Hello</h4>";

echo strtoupper("hello"), '<br>';
echo strtolower("hello"), '<br>';
echo ucfirst("primeira letra em maiuscula"), '<br>';
echo ucwords("primeira letra de cada palavra em maiuscula"), '<br>';
echo strlen("Quantas letras?");

echo '<br>' . strlen("Eu também");
echo '<br>' . mb_strlen("Eu também");
echo '<br>' . substr("Só uma parte mesmo...", 7, 6);
echo '<br>' . str_replace("isso", "aquilo", "É isso mesmo");