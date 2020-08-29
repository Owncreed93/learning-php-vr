<?php

    //  MATHS OPERATORS
    $numero1 = 55;

    $numero2 = 33;

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicar = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    $resto = $numero1%$numero2;
    $elevadoAlCuadrado = pow($numero1, 2);

    echo '<p>Suma : ' .$suma .'</p>';
    echo '<p>Resta : ' .$resta .'</p>';
    echo '<p>Multiplicaci&oacute;n : ' .$multiplicar .'</p>';
    echo '<p>División: ' .$division .'</p>';
    echo '<p>Resto' .$resto .'</p>';
    echo '<p>Elevación al cuadrado : ' .$elevadoAlCuadrado .'</p>';

    // INCREMENT/DECREMENT OPERATORS
    $year = 2019;

    // INCREMENT OPERATOR ($var +1)
    $year++;
    
    echo "<h1>Increment: $year</h1>";

    // DECREMENT OPERATOR ($var -1)
    $year--;

    echo "<h1>Decrement: $year</h1>";

    // PRE - INCREMENT ( 1 + $var)

    $year = 1 + $year;

    echo "<h1>Pre-Increment: $year</h1>";

    // ASIGMENT OPERATORS

    $edad = 55;

    echo $edad .'<br/>';

    // $var += 5 => $var = $var + 5
    $edad += 5;

    echo $edad .'<br/>';

    // $var -= 5 => $var = $var - 5
    $edad -= 5;

    echo $edad .'<br/>';


?>