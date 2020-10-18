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
 * LOGIC OPERATORS
 * 
 * && and
 * || or
 * ! not
 * and, or
 */

//  * EXAMPLE 1
//  $color = 'rojo';

//  if ( $color == 'verde' ) {

//     echo 'EL COLOR ES ROJO <br>';

//  } else {

//     echo 'El COLOR NO ES ROJO <br>';
//  }

//   * EXAMPLE 2
// $year = 2020;

// if ( $year < 2019) {
//     echo "Estamos en $year <br>";
// } else {
//     echo "Este año no es el 2019, es el $year <br>";
// }

//  * EXAMPLE 3
// $nombre = 'Audra Miller';

// $ciudad = 'Erie';

// $continente = 'America';

// $edad = 19;

// $mayoria_edad = 18;

// if( $edad >= $mayoria_edad ) {

//     echo "$nombre es mayor de edad, porque tiene $edad <br>";

//     if ( $continente == 'America' ) {

//         echo " El continente es $continente. <br />";

//     } else {


//     }

// } else {

//     echo "$nombre es menor de edad, porque tiene $edad <br>";

// }

// * EXAMPLE 04
// $dia = 3;

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

// if ( $dia === 1 ) {
//     echo 'Lunes';
// } else if ( $dia === 2) {
//     echo 'Martes';
// } else if ( $dia === 3 ) {
//     echo 'Mi&eacute;rcoles';
// } else if ( $dia === 4 ) {
//     echo 'Jueves';
// } else if ( $dia === 5 ) {
//     echo 'Viernes';
// } else if ( $dia === 6 ) {
//     echo 'S&aacute;bado';
// } else if ( $dia === 7 ) {
//     echo 'Domingo';
// } else {
//     echo 'El día es incorrecto';
// }

//  * EXAMPLE 5

// $edad1 = 18;
// $edad2 = 64;
// $edad_oficial = 20;

// if ( $edad_oficial >= $edad1  && $edad_oficial <= $edad2) {
//     echo "ESTÁ EN EDAD DE TRABAJAR <br/><hr/>";
// }

// $pais = 'Mexico';

// if ( $pais == 'Mexico' || $pais == 'España' || $pais == 'Colombia' ) {

//     echo 'En este país se habla español<br/><hr/>';

// } else {

//     echo 'En este país no se habla español <br/><hr/>';

// }

// * EXAMPLE 6 - SWITCH

// $dia = 4;

// switch ( $dia ) {

//     case 1: echo 'Lunes <br><hr>';
//             break;

//     case 2: echo 'Martes <br><hr>';
//             break;

//     case 3: echo 'Mi&eacute;rcoles <br><hr>';
//             break;

//     case 4: echo 'Jueves <br><hr>';
//             break;

//     case 5: echo 'Viernes <br><hr>';
//             break;

//     case 6: echo 'S&aacute;bado <br><hr>';
//             break;

//     case 7: echo 'Domingo <br><hr>';
//             break;

//     default: echo 'El día no es válido <br/><hr/>';
//             break;

// }

// * EXAMPLE 7 - GOTO

goto gaaaa;

echo "<h3> Instrucci&oacute;n 1 </h3>";
echo "<h3> Instrucci&oacute;n 2 <h3/>";
echo "<h3> Instrucci&oacute;n 3 <h3/>";
echo "<h3> Instrucci&oacute;n 4 <h3/>";
echo "<h3> Instrucci&oacute;n 5 <h3/>";

gaaaa:
    echo '<h3>Me he saltado 4 echos</h3>';

?>