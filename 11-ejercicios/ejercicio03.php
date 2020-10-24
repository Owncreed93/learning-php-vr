<?php

/**
 * PRINT POW 2 FOR THE FIRST 40 NATURAL NUMBERS
 */

 echo "<h2>Pow for the first 40 natural numbers using while</h2>";

 $exponential = 2;
 $counter = 1;
 while( $counter <= 40 ) {

    echo pow($counter, $exponential) .' - ';
    $counter++;

 }

 echo "<br /> <hr />";

 echo "<h2>Pow for the first 40 natural numbers using do while</h2>";

 $counter_two = 1;
 do {

    echo pow($counter_two, $exponential) .' - ';
    $counter_two++;

 } while( $counter_two <= 40 );

 echo "<br /> <hr />";

 echo "<h2>Pow for the first 40 natural numbers using for</h2>";

 for ( $i = 1; $i <= 40; $i++ ){

    echo pow($i, $exponential) .' - ';

 }

?>
