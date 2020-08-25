<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $a = 1;
        $b = 2;
        echo "Typy Proměnných: Logický typ, Celočíselný typ, Desetiné číslo, Řetězec<br>";
        echo "\$var.echo'spojování řetězců'<br>";
        echo "<img src=\"idk.jpg\" width=\"500px\" height=\"600px\"<br><br>";
        echo "\\<br>";
        dump($a + $b);
        dump($a - $b);
        dump($a / $b);
        dump($a * $b);
        dump($a++);
        dump($a--);
        dump($a += $b);
        dump($a -= $b);
        dump($a *= $b);
        dump($a /= $b);
        dump($a == $b);
        dump($a != $b);
        dump($a > $b);
        dump($a < $b);
        dump($a || $b);
        dump($a && $b);
        dump(!$a);
        ?>
    </body>
</html>
