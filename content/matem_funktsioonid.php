<?php
echo "<h2>Matemaatilise tehted</h2>";
$arv1 = 1.231;
$arv2 = 2.285;
echo "Esimene arv on ".$arv1." Teine arv on ".$arv2."<br>";
echo "'+'  Liitmise tulemus: ".($arv1+$arv2);
echo "<br>";
echo "'-'  Lahutamise tulemus: ".($arv1-$arv2);
echo "<br>";
echo "'*'  Korrutise tulemus: ".($arv1*$arv2);
echo "<br>";
echo "'/'  Jagatise tulemus: ".($arv1/$arv2);
echo "<br>";
echo "<br>";
echo "<h2>Matemaatilised funktsioonid</h2>";
echo "'min()'  Väiksem arv: ".min($arv1, $arv2);
echo "<br>";
echo "'max()'  Suurem arv: ".max($arv1, $arv2);
echo "<br>";
echo "'round(arv)'  Ümardamine täisarvani: ".round($arv1);
echo "<br>";
echo "'ceil(arv)'  Ümardab jargmise arvuni: ".ceil($arv1);
echo "<br>";
echo "'floor(arv)'  Ümardab allapoole täisarvani: ".floor($arv1);
echo "<br>";
echo "'round(arv, 1)'  Ümardab ühe komma kohtani: ".round($arv1, 1);
echo "<br>";
echo "'rand()'  Juhuslik arv: ".rand(1,100);
echo "<br>";
echo "'pow(arv, 2)'  Astendamine: ".pow($arv1, 2);
echo "<br>";
echo "'sqrt(arv)'  Ruutjuurt: ".sqrt($arv2);
echo "<br>";
echo "'pi()'  Pi: ".pi();
echo "<br>";
echo "<h2>Omistamise operaatorid</h2>";
$x = 10;
$y = 20;
echo "Suurendamine ühe võrra: ";
$x++; //$x = $x+1
echo $x;
echo "<br>";
echo "Vahendamine ühe võrra: ";
$x--;
echo $x;
echo "<br>";
$x*=$y; //$x = $x*$y
echo $x;
echo "<br>";
$x/=$y;
echo $x; //$x = $x/$y
echo "<br>";

$nimi = "sasha";
$perenimi = "ryshniak";
//$nimi .= $perenimi;
echo $nimi;
echo "<br>";
$format ='Tere, %s %s; arv x: %d';
printf($format,$nimi, $perenimi, $x );
echo "<br>";



