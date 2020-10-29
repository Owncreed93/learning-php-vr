<!-- WHO ALL MULTIPLICATION TABLES FROM 1 TO 10 IN A HTML TABLE -->
<?php

    $table = 1;
    
    while( $table <= 10) {
        echo "<table style='border: 1px solid #000000'>";
        echo "<thead style='border: 1px solid #000000'> <th>Table $table </th> </thead>";
        $i = 1;
        echo "<tbody style='border: 1px solid #000000'>";
        while( $i <=12 ){
            echo "<tr style='border: 1px solid #000000'>";
            echo "<td style='border: 1px solid #000000'>$table" ." x " ."$i" ." = " .($table*$i) ."</td>";
            echo "</tr>";
            $i++;
        }
        echo "</tbody>";
        $table++;
        echo "</table> <br/>";

    }
    

?>