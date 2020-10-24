<?php

/**
 * OBTAIN 2 NUMBERS BY THE URL AND  CREATE A CALCULATOR ( +, -, *, / )
 */

  isset($_GET['n1']) ? $number1 = (int) $_GET['n1'] : $number1 = 1;
  isset($_GET['n2']) ? $number2 = (int) $_GET['n2'] : $number2 = 1;

 $suma = $number1 + $number2;
 $resta = $number1 - $number2;
 $mult = $number1 * $number2;
 $division;
($number1 > $number2) && ($number1 !== 0) ? $division = ($number1 / $number2) : $division = 'Indeterminada';


if( $number1 !== 0 && $number2 !== 0 ) $division = ($number1 / $number2);

if ( $number1 === 0 && $number2 !== 0 ) $division = 0;

if( $number1 !== 0 && $number2 === 0 ) $division = 'Indeterminada';

echo "Calculadora  : \n";

echo "<ul>";

echo "<li> $number1 + $number2  = " ."$suma" ."</li>";

echo "<li> $number1 - $number2  = " ."$resta" ."</li>";

echo "<li> $number1 * $number2  = " ."$mult" ."</li>";

echo "<li> $number1 / $number2  = " ."$division" ."</li>";

echo "</ul>";



?>