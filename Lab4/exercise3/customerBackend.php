<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $desk = $_POST["desk"];
    $chair = $_POST["chair"];
    $lamp = $_POST["lamp"];
    $shipping = $_POST["shipping"];

    $username = $_POST["username"];
    $password = $_POST["password"];


    if ($shipping == "7-day") {
        $shipping_cost = 0;
    }
    if ($shipping == "Overnight") {
        $shipping_cost = 50;
    }
    if ($shipping == "Three-day") {
        $shipping_cost = 5;
    }

    $total = ($desk * 600) + ($chair * 25) + ($lamp * 50) + $shipping_cost;

    echo "<html><head><link rel="stylesheet" type="text/css" href="style.css"/></head>";
    echo "Welcome <br>";
    echo "Your username is: " . $username . "<br>";
    echo "Your password is: " . $password . "<br><br>";
  echo "Receipt <br>";
  echo "<table>";
    echo "<tr> <th>Quantity</th> <th>Cost Per Item</th> <th>Sub Total</th> </tr>";
    echo "<tr> <td>Desk</td> <td>" . $desk . "</td> <td>$600</td> <td>$" . ($desk * 600). "</td> </tr>";
    echo "<tr> <td>Chair</td> <td>" . $chair . "</td> <td>$25</td> <td>$" . ($chair * 25) . "</td> </tr>";
    echo "<tr> <td>Lamp</td> <td>" . $lamp . "</td> <td>$50</td> <td>$" . ($lamp * 50) . "</td> </tr>";
    echo "<tr> <td>Shipping</td> <td colspan = "2">" . $shipping . "</td> <td></td> <td>$" . $shipping_cost . "</td> </tr>";
    echo "<tr> <td colspan = "3">Total Cost</td> <td>$" . $total . "</td> </tr>";
echo "</table>";
echo "</html>";

?>
