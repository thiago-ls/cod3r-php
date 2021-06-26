<div class="titulo">Interpolação</div>

<?php

$numero = 10;
echo '<br> $numero';
echo "<br> $numero";

echo "<br> A sua nota é $numero";

$objeto = "caneta";
echo "<br>Eu tenho 5 $objetos";
echo "<br>Eu tenho 5 {$objeto}s"; // o ideal é usar sem espaços
echo "<br>Eu tenho 5 { $objeto}s"; // espaço no inicio interfere
echo "<br>Eu tenho 5 {$objeto }s"; // espaço no final não intefere
