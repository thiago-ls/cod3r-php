<div class="titulo">Tipo booleano</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);

echo '<br>' . is_bool(false);
echo '<br>' . is_bool('false');

// fazer as regras de conversões
echo '<br>' . var_dump((float) 0);
echo '<br>' . var_dump((bool) 0); // apenas zero é false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) "");
echo '<br>' . var_dump((bool) " ");
echo '<br>' . var_dump((bool) "0"); //falso
echo '<br>' . var_dump((bool) "00");

echo '<br>' . var_dump(!!"false");


