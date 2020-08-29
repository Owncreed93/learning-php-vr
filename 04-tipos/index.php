<?php 

/**
 * DATA TYPE
 * INTEGER (int / integer) eg = 99
 * FLOATS / DECIMALS (float, double) eg = 3.45
 * STRINGS (string) = "Hellow I am a string"
 * BOOLEAN (bool) = 1 0 true false 
 * null
 * Array (data collection)
 * OBJECTS
 *  */

 $numero = 100;
 $decimal = 27.9;
 $texto = "<p>I am a text</p>";
 $escapado = "<p>This is text \" escaping \' </p>";
 $truthfull = true;
 $nula = null;

 echo gettype($numero) ."</br>";
 echo gettype($decimal) ."</br>";
 echo gettype($truthfull) ."</br>";
 echo gettype($nula) ."</br>";
 echo $escapado;

 var_dump($nula);
 var_dump($texto);

 ( gettype($numero) == 'integer' ) ? $resultado = "<p>La variable $numero es un entero</p>" : $resultado = "<p>No es entero</p>";

 echo $resultado
 

?>