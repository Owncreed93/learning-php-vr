<?php 

/**
 * GET TWO NUMERIC VALUES VIA GET AND SHOW THE NATURAL IMPAIR NUMBERS BETWEEN THEM
 *  */ 

isset( $_GET['n1'] ) ? $n1 = (int) $_GET['n1'] : $n1 = 0;
isset( $_GET['n2'] ) ? $n2 = (int) $_GET['n2'] : $n2 = 1;

echo "<h2> The list of number between $n1 and $n2 are : </h2>";

while( $n1 <= $n2 ){

    if( $n1 % 2 !== 0 ) {

        echo "$n1 - ";

    }
    $n1++;
   

}

echo "<br/> <hr/>";


?>