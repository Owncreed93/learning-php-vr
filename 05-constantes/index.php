<?php 

/**
 * CONSTANTS
 *  DATA WON'T CHANGE **/

 define('nombre', 'Christian Gerson Tarifeño Ramirez');
 define('web', 'christiantarifer.gitlab.com');
 $jumpline = "</br><hr>";
 
 echo nombre ."</br>";
 echo web ."</br>";

 function holaMundo() {
     echo "Name of the function: " .__FUNCTION__ ;
 }

 // * PREDEFINE CONSTANTS
 echo "<hr>";
 echo "The Operative system: " .PHP_OS .$jumpline;
 echo "PHP version: " .PHP_VERSION .$jumpline;
 echo "PHP Directory: " .PHP_EXTENSION_DIR .$jumpline;
 echo "LINE where this command is executed: " .__LINE__  .$jumpline;
 echo "Route where this file is stored: " .__FILE__ .$jumpline;
 echo holaMundo() .$jumpline;
?>