<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <a href="index.php"></a>
    <head>
        <meta charset="UTF-8">
    <a href="index.php"></a>
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
        var_dump($a + $b);
        var_dump($a - $b);
        var_dump($a / $b);
        var_dump($a * $b);
        var_dump($a++);
        var_dump($a--);
        var_dump($a += $b);
        var_dump($a -= $b);
        var_dump($a *= $b);
        var_dump($a /= $b);
        var_dump($a == $b);
        var_dump($a != $b);
        var_dump($a > $b);
        var_dump($a < $b);
        var_dump($a || $b);
        var_dump($a && $b);
        var_dump(!$a);
        $jmenoprijmeni1 = 1;
        $jmenoprijmeni2 = 5;
        echo "<br>";
        if ($jmenoprijmeni1 == 1) {
            echo "Michal Behýl<br>";
        }
        if ($jmenoprijmeni2 == 3) {
            echo "Michal<br>";
        } else {
            echo "Behýl<br>";
        }
        if ($jmenoprijmeni1 > $jmenoprijmeni2) {
            echo "Michal<br>";
        } elseif ($jmenoprijmeni1 < $jmenoprijmeni2) {
            echo "Behýl<br>";
        }
        switch ($jmenoprijmeni1) {
            case 1: echo "Ahoj";
                break;
            case 2: echo "johA";
                break;
            case 3: echo "aHoj";
                break;
            case 4: echo "ahOj";
                break;
            case 5: echo "ahoJ";
                break;
            default: echo "Ništ";
        }
        $var = Array(1 => 'mlieko', 'maslo', 'mäso', 'čaj', 'káva', 'varená kukurica', 'melón', 'bageta', 'špagety', 'granátové jablko');
        $var2 = Array(
            Array(
                Array(
                    Array('jméno' => 'Max', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'knírač', 'věk' => 4),
                    Array('jméno' => 'Alina', 'Pohlavie' => 'F', 'druh' => 'pes', 'rasa' => 'čo ja viem', 'věk' => 14),
                    Array('meno' => 'Badi', 'Pohlavie' => 'M', 'druh' => 'pes', 'rasa' => 'čo ja viem', 'věk' => "N/A"),
                    Array('meno' => 'Kočička', 'Pohlavie' => 'F', 'druh' => 'Mačka', 'rasa' => 'čo ja viem', 'vek' => "3"),
        )));
        var_dump($var2);
        var_dump($var);
        $riadokMichalBehyl = 8; //mesiac narodenia
        $stlpecMichalBehyl = 17; //vek
        echo "<table border=1>";
        for ($i = 1; $i <= $riadokMichalBehyl; $i++) {
            echo "<tr>";
            for ($x = 1; $x <= $stlpecMichalBehyl; $x++) {
                echo "<td>".$i."-".$x."</td>";
            }
            echo "</tr>";
        }
        echo "</table><br><br><br>";
        echo abs(18)."<br><br>";
        echo tan(242)."<br><br><br>";
        echo ucwords("ahoj ahoj ahoj ahoj<br><br>");
        echo ucfirst("ahoj ahoj ahoj ahoj<br><br><br>");
        echo sizeof($var)."<br><br>";
        echo end($var)."<br>";
        echo "<br><br>";
        $key = 1;
        foreach ($var as $key => $var1_1){
            echo $key.". ".$var1_1."<br>";
        }
        echo "<br>";
        function dru_moc (float $cislo){
            return ($cislo*$cislo);
        }
        echo dru_moc(69);
        ?> 
    </body>
</html>
