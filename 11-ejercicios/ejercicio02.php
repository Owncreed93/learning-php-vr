<?php

/**
 * 
 * EXTRAC ALL PAIR NUMBERS UNTIL 100
 */

// *  WHILE

echo "<h2> All pair numbers until 100 usign While</h2>";

 $counter = 1;
 while( $counter <= 100) {

    if( $counter % 2 === 0 ) echo "$counter - ";

    $counter++;

 }

  echo "<br /> <hr />";

  // *  DO WHILE

  echo "<h2> All pair numbers until 100 usign do - While</h2>";

 $counter_two = 1;
 do {

    if( $counter_two % 2 === 0 ) echo "$counter_two - ";

    $counter_two++;

 } while ( $counter_two <= 100 );

 echo "<br /> <hr />";

//  * FOR

echo "<h2> All pair numbers until 100 usign for </h2>";


for( $i = 1; $i <= 100; $i++ ) {

    if( $i % 2 === 0 ) echo "$i - ";

}


?>