<?php

$score = null;
$total = 3;

if (isset($_GET['odeslat'])) {
// strtolower je čistě na to aby odpověď byla vždy v malých písmenech že když napíšete Praha nebo praha tak vám to dá správnou odpověď u obou


    $score = 0;
    if(isset($a1)){
        if (strtolower($a1) === 4){$score++;}
    }
    if(isset($a2)){
        if (strtolower($a2) === 'praha'){$score++;}
    }
    if(isset($a3)){
        if (strtolower($a3) === 'ano'){$score++;}
    }
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <title>Kvíz</title>
    <style>
        body { font-family: sans-serif; max-width: 700px; margin: 2rem; }
        label { display: block; margin-top: 1rem; }
        input[type="text"] { width: 100%; padding: .4rem; box-sizing: border-box; }
        .result { margin-top: 1.5rem; padding: 1rem; border: 1px solid #ccc; background: #f9f9f9; }
        img { max-width: 200px; display:block; margin-top:.5rem; }
    </style>
</head>
<body>

<h1>Krátký kvíz</h1>

<?php if ($score !== null): ?>
    <div class="result">
        <strong>Máte <?php echo $score; ?> správných odpovědí z <?php echo $total; ?>.</strong>
        <?php
        if ($score === $total) {
            echo "<p>Nerd_emoji</p>";
            echo "<img src='ab67706c0000da841f54312d0c9f27ecd5b7cd94.jpg' alt='výborně'>";
        } elseif ($score >= 2) {
            echo "<p>i guess bro</p>";
            echo "<img src='dap-me-up-dab-me-up.gif' alt='dobře'>";
        } else {
            echo "<p>fekal</p>";
            echo "<img src='cpng.png' alt='zkuste znovu'>";
        }
        ?>
    </div>
<?php else: ?>
    <p>Odpovězte na následující otázky a stiskněte Odeslat.</p>
<?php endif; ?>

<form method="get" action="">
    <label for="ot1">1) Kolik nohou má pes?</label>
    <input id="ot1" type="text" name="otazka1" value="<?php echo htmlspecialchars($_GET['otazka1'] ?? ''); ?>">

    <label for="ot2">2) Jaké je hlavní město České republiky?</label>
    <input id="ot2" type="text" name="otazka2" value="<?php echo htmlspecialchars($_GET['otazka2'] ?? ''); ?>">

    <label for="ot3">3) Je voda mokrá? (Ano/Ne)</label>
    <input id="ot3" type="text" name="otazka3" value="<?php echo htmlspecialchars($_GET['otazka3'] ?? ''); ?>">

    <br><br>
    <button type="submit" name="odeslat">Odeslat</button>
</form>

</body>
</html>