<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

    echo "<table>";

    for ($i = 0; $i < 101; $i++) {
        echo "<tr>";

        for ($j = 0; $j < 101; $j++) {
            if ($i == 0) { //prints first row
                if ($j == 0) {
                    echo "<td>   </td>";
                }     
                else {
                echo "<td>".($j * ($i + 1))."</td>"; 
                }
            }
            else if($j == 0) {
                echo "<td>".($i)."</td>"; //prints first column
            }
            else {     
                echo "<td>".($j * $i)."</td>"; //prints inner table
            }
        }

    echo "</tr>";
    }

    echo "</table>";
 ?>