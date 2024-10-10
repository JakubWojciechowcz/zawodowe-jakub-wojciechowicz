<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="baner">
        <h1>BIURO PODRÓŻY</h1>
    </div>

    <div class="lewy">
        <h2>Promocje</h2>
        <table>
            <tr>
                <td>Warszawa</td>
                <td>od 600 zł</td> 
            </tr>
                <tr>
                <td>Wenecja</td>
                <td>od 1200 zł</td>
                </tr>
                <tr>
                    <td>Paryż</td>
                    <td>od 1200 zł</td>
                </tr>
           
        </table>
    </div>

    <div class="srodkowy">
        <h2>W tym roku jedziemy do...</h2>
        <?php

        $serwer = 'localhost';
        $uzytkownik = 'root';
        $dbname = 'podróże';
        $password = '';

        $db = mysqli_connect($serwer, $uzytkownik, $password, $dbname);
        $q = 'SELECT nazwaPliku, podpis FROM `zdjecia` ORDER BY podpis;';
        $result = mysqli_query($db, $q);

        while($row = mysqli_fetch_array($result)){
           echo '<img src="'.$row['nazwaPliku'].'" alt="'.$row['podpis'].'" title="'.$row['podpis'].'">';
        }

        ?>
      
    </div>

    <div class="prawy">
        <h2>Kontakt</h2>
        <a href="mailto: biuro@wycieczki.pl">napisz do nas</a>
        <p>
            telefon: 444555666
        </p>
    </div>

    <div class="dane">
        <h3>W poprzednich latach byliśmy</h3>
        <ol type="I">
            <?php
            $q = 'SELECT cel, dataWyjazdu FROM `wycieczki` where dostepna = "0";';
            $result = mysqli_query($db, $q);
            while($row = mysqli_fetch_array($result)){
            echo '<li>Dnia '.$row['dataWyjazdu'].' pojechaliśmy do '.$row['cel'].'</li>';
            }

            ?>

        </ol>
    </div>

    <div class="stopka">
        <p>
            Stornę wykonał: Jakub Wojciechowicz
        </p>
    </div>
    
</body>
</html>