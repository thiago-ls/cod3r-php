<div class="titulo">Tipo float</div>

<?php

    error_reporting(~E_WARNING);

    echo 1 + 1, '<br>';
    var_dump(1 + 1);
    echo '<br>';
    var_dump(1 + 1.1);
    echo '<br>';

    echo 7 / 4, '<br>';
    echo intdiv(7, 4), '<br>';
    echo round(7 / 4), '<br>';

    //echo 7 / 0, '<br>'; // infinito (erro em versões mais recentes)
    //echo intdiv(7, 0), '<br>'; # erro!
    
    echo  4 ** 2, '<br>';

    //Precedência
    /*
        ()
        **
        / *
        + -
     */

     echo 2 + 3 * 4, '<br>';
     echo (2 + 3) * 4, '<br>';
     echo 2 + 3 * 4  ** 2, '<br>';
     echo ((2 + 3) * 4)  ** 2, '<br>';

    