<?php

// * WHILE

$number = 0;
while ( $number <= 100 ) {
    
    // CHANGE DATA TYPE
    echo "The number is $number";

    if ( $number != 100 ) { 
        echo ", <br />"; 
    } else { 
        echo "End of the list<br/>"; 
    }

    $number++;

}

echo "<hr />";

if( $_GET['numero'] ){

    $numero = (int) $_GET['numero'];

} else {

    $numero = 1;

}

var_dump( $numero );

echo "<h1> Tabla de multiplicar del número $numero </h1>";

$contador = 0;
while( $contador <= 12 ){

    echo " $numero x $contador = " .($numero * $contador) ."<br/>";
    $contador++;
}

echo "<hr />";

// DO WHILE
$edad = 18;
$contador = 1;

do{

    echo "Tienes acceso al local privado $contador <br />";
    $contador++;

} while( $edad >= 18  && $contador <= 10);


?>