<div class="titulo">Desafio Strings</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string, 
// qual o métodos que a posicao do texto 'abc' 
// na string '!AbcaBcabc' retorne 1?

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>'; // case insensitive

echo strpos(strtolower('!AbcaBcabc'), 'abc') . '<br>'; 