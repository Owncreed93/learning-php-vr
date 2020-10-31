<?php

/**
 * LOCAL VARIABLES:
 * THEY ARE DECLARE INSIDE A FUNCTION AND CANNOT BE USE OUTSIDE THAT SCOPE
 * EVEN THOUGH A RETURN IS USE
 * GLOBAL VARIABLES:
 * THEY ARE DECLARE OUTSIDE A FUNCTION AND CAN BE USE ANYWHERE ON THE CODE
 */

//  LOCAL VAR
 $frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo() {

    global $frase;

    $texto = "<h1> $frase </h1>";

    $year = 2020 ."<br/>";

    $texto .= $year;

    return $texto;

}

// echo holaMundo();

// VARIABLES FUNCTION

function buenasDias() {

    return "<p>Hola Buenos Dias :)</p>";

}

function buenasTardes() {

    return "<p>Hey!! Que tal la comida ?</p>";

}

function buenasNoches() {   

    return "<p>¿ Te vas a dormir ya? Buenas noches!</p>";

}

// $horario = $_GET['horario'];
$horario = 'Noches';

$miFuncion = "buenas" .$horario;

echo $miFuncion();  

?>