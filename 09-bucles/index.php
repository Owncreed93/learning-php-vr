<?php

// * WHILE

$number = 0;
while ( $number <= 100 ) {
    
    echo "The number is $number";

    if ( $number != 100 ) { 
        echo ", <br />"; 
    } else { 
        echo "End of the list<br/>"; 
    }

    $number++;

}

?>