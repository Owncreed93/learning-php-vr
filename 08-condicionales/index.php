<?php

/**
 * CONDICIONALES
 * if ( condition ) {
 *      sentences
 * } else {
 *      other sentences
 * }
 * 
 * COMPARATION OPERATORS
 * 
 * == equal (same value)
 * === identical (same value, same type of value)
 * != diferente
 * <> diferente
 * !== no identtical
 * < less than
 * > greater than
 * <= less or equal to
 * >= greather or equeal to
 * 
 */

//  * EJEMPLO 1
 $color = 'rojo';

 if ( $color == 'verde' ) {

    echo 'EL COLOR ES ROJO <br>';

 } else {

    echo 'El COLOR NO ES ROJO <br>';
 }

//   * EJMEPLO 2
$year = 2020;

if ( $year < 2019) {
    echo "Estamos en $year <br>";
} else {
    echo "Este año no es el 2019, es el $year <br>";
}

//  * EJEMPLO 3
$nombre = 'Audra Miller';

$ciudad = 'Erie';

$continente = 'America';

$edad = 19;

$mayoria_edad = 18;

if( $edad >= $mayoria_edad ) {

    echo "$nombre es mayor de edad, porque tiene $edad <br>";

    if ( $continente == 'America' ) {

        echo " El continente es $continente. <br />";

    } else {


    }

} else {

    echo "$nombre es menor de edad, porque tiene $edad <br>";

}

// * EJERCICIO 04
$dia = 3;

// if( $dia === 1 ) {
//     echo "Es Lunes <br />";
// } else {
//     if( $dia === 2 ){
//         echo "Es Martes <br />";
//     } else {
//         if( $dia === 3 ) {
//             echo "Es Mi&eacute;rcoles <br />";
//         } else {
//             if ( $dia === 4 ) {
//                 echo "Es Jueves <br />";
//             } else {
//                 if ( $dia === 5 ) {
//                     echo "Es Viernes <br />";
//                 } else {
//                     if ( $dia === 6 ) {
//                         echo "Es S&aacute;bado <br />";
//                     } else {
//                         if ( $dia === 7 ) {
//                             echo "Es Domingo <br />";
//                         }
//                     }
//                 }
//             }
//         }
//     }
// }

if ( $dia === 1 ) {
    echo 'Lunes';
} else if ( $dia === 2) {
    echo 'Martes';
} else if ( $dia === 3 ) {
    echo 'Mi&eacute;rcoles';
} else if ( $dia === 4 ) {
    echo 'Jueves';
} else if ( $dia === 5 ) {
    echo 'Viernes';
} else if ( $dia === 6 ) {
    echo 'S&aacute;bado';
} else if ( $dia === 7 ) {
    echo 'Domingo';
} else {
    echo 'El día es incorrecto';
}

?>