<?php

$score = null;
$total = 3;

if (isset($_GET['odeslat'])) {


    $a1 = $_GET['otazka1'];
    $a2 = strtolower($_GET['otazka2']);
    $a3 = strtolower($_GET['otazka3']);

    $score = 0;

  
    if ($a1 == "4") {
        $score++;
    }

  
    if ($a2 == "praha") {
        $score++;
    }

   
    if ($a3 == "ano") {
        $score++;
    }
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <title>Kvíz</title>

    <style>
        body {
            font-family: sans-serif;
            max-width: 700px;
            margin: 2rem;
        }

        label {
            display: block;
            margin-top: 1rem;
        }

        input[type="text"] {
            width: 100%;
            padding: .4rem;
            box-sizing: border-box;
        }

        .result {
            margin-top: 1.5rem;
            padding: 1rem;
            border: 1px solid #ccc;
            background: #f9f9f9;
        }

        img {
            max-width: 200px;
            display: block;
            margin-top: .5rem;
        }
    </style>
</head>

<body>

<h1>Krátký kvíz</h1>

<?php

if ($score !== null) {

    echo "<div class='result'>";

    echo "<strong>Máte " . $score . " správných odpovědí z " . $total . ".</strong>";

    if ($score == $total) {

        echo "<p>Nerd_emoji</p>";
        echo "<img src='ab67706c0000da841f54312d0c9f27ecd5b7cd94.jpg' alt='výborně'>";

    } else {

        if ($score >= 2) {

            echo "<p>i guess bro</p>";
            echo "<img src='dap-me-up-dab-me-up.gif' alt='dobře'>";

        } else {

            echo "<p>fekal</p>";
            echo "<img src='cpng.png' alt='zkuste znovu'>";
        }
    }

    echo "</div>";

} else {

    echo "<p>Odpovězte na následující otázky a stiskněte Odeslat.</p>";
}

?>

<form method="get" action="">

    <label for="ot1">1) Kolik nohou má pes?</label>
    <input id="ot1" type="text" name="otazka1">

    <label for="ot2">2) Jaké je hlavní město České republiky?</label>
    <input id="ot2" type="text" name="otazka2">

    <label for="ot3">3) Je voda mokrá? (Ano/Ne)</label>
    <input id="ot3" type="text" name="otazka3">

    <br><br>

    <button type="submit" name="odeslat">Odeslat</button>

</form>
//kdyby vás to uplnou náhdou zajímalo tak během zkoušení psaní tohoto kódu domu mi byl počítač schopen hodit blue screen
 a zkorumpuvat mi celé vss a zhruba tak hodinu jsem s tím bojoval než jsem mi to povedlo vůbec reinstallovat jen abych zjistil 
 že se mi to neuložilo :( 
</body>
</html>