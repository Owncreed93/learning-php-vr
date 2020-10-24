<?php

// FOR

$resultado = 0;

for( $i = 0;  $i <= 100; $i++ ){

    $resultado += $i;
    echo "<p>$resultado</p>";

}

echo "<p>El resultado es $resultado</p>";

if ( isset($_GET['numero'] ) ) {

    $numero = (int) $_GET['numero'];

} else {

    $numero = 1;

}

echo "<h1> Multiplication table: $numero </h1>";

// MULTIPLICATION TABLE
for( $i=1; $i<= 12; $i++ ){

    if( $numero == 45 ){

        echo "El número $numero esta prohibido";
        break;

    }

    echo "<p> $numero x $i = " .($numero * $i) ."</p>";

}



?>