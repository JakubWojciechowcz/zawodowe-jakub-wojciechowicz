<?php
$cookie_name = "visited";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + 7200);
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port Lotniczy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    
    <div class="baner1">
        <img src="zad5.png" alt="logo lotnisko">
    </div>

    <div class="baner2">
        <h1>Przyloty</h1>
    </div>

    <div class="baner3">
        <h3>przydatne linki</h3>
        <a href="kwarendy.txt">Pobierz</a>
    </div>

    <div class="glowny">
        <table>
            <tr>
            <th>czas </th>
            
            <th>kierunek </th>
            
            <th>numer rejsu </th>
            
            <th>status</th>
            
            </tr>
            <?php

       $db = mysqli_connect("localhost","root", "", "egzamin");

        $sql = "SELECT czas, kierunek, nr_rejsu, status_lotu FROM `przyloty` ORDER BY czas ASC;";
           $result = $db->query($sql);
           
           while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>$row[0]</td>";
                echo "<td>$row[1]</td>";
                echo "<td>$row[2]</td>";
                echo "<td>$row[3]</td>";
            echo "</tr>";
           }

           $db -> close();
           ?>
        </table>
    </div>

    <div class="stopka1">
      <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "<p><i>„Witaj ponownie na stronie lotniska</i></p>";
          }
           else {
            echo "<p><b>Dzień dobry! Strona lotniska używa ciasteczek</p></b>";
            
          }

      ?>
    </div>

    <div class="stopka2">
        Autor: Jakub Wojciechowicz
    </div>
</body>
</html>