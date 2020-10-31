<?php 

/**
 * FUNCTION:
 * SET OF INSTRUCTIONS GROUP BY A MAIN NAME
 * COULD BE RE USE.
 * 
 * function <FunctionName>( $param ) {
 *     sentences
 * }
 * 
 * <FunctionName>( $param )
 */


//  EXAMPLE 1

function muestraNombres() {

    echo "Christian Tarifeño <br/>";

    echo "Audra Miller <br/>";

    echo "Randy Real <br/>";

    echo "Salma Pejerrey <br/>";

}

muestraNombres();

muestraNombres();

muestraNombres();

//  EXAMPLE 2

function tabla( $numero ){

    $numero = (int) $numero;

    echo "<h3> Tabla de multiplicar del número: $numero </h3>";

    for ( $i = 1; $i <= 12; $i++ ) {

        $operacion = $numero*$i;

        echo "<p> $numero X $i = " .$operacion  ."</p>";

    }

}

// if ( isset( $_GET['n1'] ) ) {

//     tabla( $_GET['n1'] );

// } else {

//     echo " No hay número para sacar la tabla ";

// }

// for( $i = 1; $i <= 10; $i++ ):

//     tabla($i);

// endfor;


// EXAMPLE 3

function calculadora( $numero1 , $numero2, $negrita = false ){

    // SET OF INSTRUCTIONS TO EXECUTE
    // isset($_GET['n1']) ? $numero1 = (int) $_GET['n1'] : $numero1 = 1;
    // isset($_GET['n2']) ? $numero2 = (int) $_GET['n2'] : $numero2 = 1;

    $cadena_texto = "";

    if( $negrita ){

        $cadena_texto .= "<h2> Se ha activado negrita </h2>";

    }

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $mult = $numero1 * $numero2;
    ($numero1 > $numero2) && ($numero1 !== 0) ? $division = ($numero1 / $numero2) : $division = 'Indeterminada';


    if( $numero1 !== 0 && $numero2 !== 0 ) $division = ($numero1 / $numero2);

    if ( $numero1 === 0 && $numero2 !== 0 ) $division = 0;

    if( $numero1 !== 0 && $numero2 === 0 ) $division = 'Indeterminada';

    $cadena_texto .= "Calculadora  : \n";

    $cadena_texto .= "<ul>";

    $cadena_texto .= "<li> $numero1 + $numero2  = " ."$suma" ."</li>";

    $cadena_texto .= "<li> $numero1 - $numero2  = " ."$resta" ."</li>";

    $cadena_texto .= "<li> $numero1 * $numero2  = " ."$mult" ."</li>";

    $cadena_texto .= "<li> $numero1 / $numero2  = " ."$division" ."</li>";

    $cadena_texto .= "</ul>";

    $cadena_texto .= "<hr/>";

    return $cadena_texto;

}

echo calculadora( 10, 20, true );

// EXAMPLE 4

function getNombre( $nombre = 'Jhon' ) {

    $texto = "El nombre es : $nombre <br/>";

    return $texto;

}

function getApellido( $apellido = 'Doe' ) {

    $texto = "Los apellidos son: $apellido <br/>";

    return $texto;

}

function devuelveElNombre( $nombre , $apellidos  ){

    $texto = getNombre( $nombre );
    $texto .= getApellido( $apellidos );

    return $texto;

}

echo devuelveElNombre( 'Christian', 'Tarifeño');




?>


