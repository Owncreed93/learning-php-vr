<?php
    // $nombre = $_GET['nombre'];
    // $apellidos = $_GET['apellidos'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];

    echo '<p>' .$nombre  .' ' .$apellidos .'</p>';

    var_dump($_POST);
?>