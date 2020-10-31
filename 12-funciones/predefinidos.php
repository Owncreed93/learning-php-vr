<?php 

    $nombre = 'Christian';

    // DEBUGGIN
    var_dump( $nombre );

    // DATES
    echo date('d-F-Y') ."<br/>";

    // TIMESTAMP
    echo time() ."<br/>";

    // MATHEMATICS

    // SQUARE ROOT
    echo "Raiz cuadrada de 10: " .sqrt(10) ."<br/>";

    // RANDOM
    echo "Número aleatorio entre 10 y 40 : " .rand(10, 40) ."<br/>";

    // PI
    echo "Pi: " .pi() ."<br/>";

    // ROUND
    echo "Redondear : " .round(7.891234, 2 ) ."<br/>";

    // TYPE
    echo gettype($nombre) ."<br/>";

    // VALIDATE TYPE
    if( is_string($nombre) ) {

        echo "La variable es string <br/>";

    }

    if( is_float($nombre) ) {

        echo "La variable es un float <br/>";

    } else {

        echo "La variable no es un decimal <br/>";
    }

    // EXISTANCE
    isset($edad) ? $resultado = "La edad es $edad <br/>" : $resultado = "La variable no existe <br/>";

    echo $resultado;

    // TRIM CHARACTERS
    $frase = '                     mi contenido                     ';

    $frase = trim($frase);

    echo $frase ."<br/>";

    // DELETE VARS
    // $year = 2020;
    // unset($year);

    // var_dump($year);

    // TEST EMPY VARIABLE
    $texto = "";

    if( empty($texto) ) {
        echo "La variable texto está vacía <br/>";
    } else {
        echo "La variable texto tiene contenido <br/>";
    }

    // COUNT CHARACTERS ON A STRING
    $cadena = "12345";

    echo strlen($cadena) ."<br/>";

    // FIND A CHARACTER
    $frase = "La vida es bella";

    echo strpos( $frase, "vida" ) ."<br/>";

    // REPLACE WORDS OF A STRING
    $frase = str_replace( "vida", "moto", $frase );

    echo $frase ."<br/>";

    // MAYUSCULA Y MINUSCULAS
    echo strtolower($frase) ."<br/>";
    echo strtoupper($frase) ."<br/>";

?>