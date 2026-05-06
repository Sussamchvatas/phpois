<?php
echo "Ahoj světe";
echo "<br><br>";

$zvirata = ["kočka", "pes", "veverka"];
echo $zvirata[0]; 
echo "<br>";
foreach ($zvirata as $zvire) {
    echo $zvire . " ";
}
echo "<br><br>";

$x = 10;
$jmeno = "Petr";
echo $x . " " . $jmeno;
echo "<br><br>";

for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "<br><br>";

$jmeno = "Petr";
echo "Ahoj " . $jmeno;
echo "<br><br>";


echo "<strong>ÚLOHA 1:</strong><br>";
for ($i = 1; $i <= 100; $i++) {
    echo $i . "<br>";
}
echo "<br>";

echo "<strong>ÚLOHA 2:</strong><br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i > 50) {
        echo "hodně<br>";
    } else {
        echo $i . "<br>";
    }
}
echo "<br>";

echo "<strong>ÚLOHA 3:</strong><br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
echo "<br>";

echo "<strong>ÚLOHA 4:</strong><br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i . "<br>";
    }
}
echo "<br>";

echo "<strong>ÚLOHA 5:</strong><br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "BUM PRÁSK<br>";
    } elseif ($i % 3 == 0) {
        echo "BUM<br>";
    } elseif ($i % 5 == 0) {
        echo "PRÁSK<br>";
    } else {
        echo $i . "<br>";
    }
}
echo "<br>";

echo "<strong>ÚLOHA 6:</strong><br>";
$ovoce = ["jablko", "hruška", "banán", "švestka", "pomeranč", "citron", "hrozny", "ananas"];
foreach ($ovoce as $f) {
    echo $f . "<br>";
}
echo "<br>";

echo "<strong>ÚLOHA 7:</strong><br>";
$slova = ["auto", "počítač", "stůl", "židle", "knihovna", "lampička"];
foreach ($slova as $s) {
    if (strlen($s) > 5) {
        echo strtoupper($s) . "<br>";
    } else {
        echo $s . "<br>";
    }
}
echo "<br>";

echo "<strong>ÚLOHA 8:</strong><br>";
$jm = "Anna";
$vek = 28;
echo "Ahoj, jmenuji se " . $jm . " a je mi " . $vek . " let.";
echo "<br><br>";

echo "<strong>ÚLOHA 9:</strong><br>";
$hod = rand(1, 6);
echo "Hod kostkou: " . $hod;
echo "<br><br>";

echo "<strong>ÚLOHA 10:</strong><br>";
$podmet = ["Kočka", "Pes", "Veverka", "Chobotnice", "Pták"];
$prisudek = ["jí", "vidí", "nese", "kouše", "pozoruje"];
$predmet = ["jablko", "batoh", "list", "rybu", "sušenku"];

$randPod = $podmet[array_rand($podmet)];
$randPris = $prisudek[array_rand($prisudek)];
$randPred = $predmet[array_rand($predmet)];

echo $randPod . " " . $randPris . " " . $randPred . ".";
echo "<br>";