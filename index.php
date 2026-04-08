<?php

for ($i = 1; $i <= 51; $i++) {
    if ($i > 50) {echo "hodně ";}
    else {echo $i . " ";}
}

?>
<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>
<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i . " ";
    }
}
?>
<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {echo "bumprask ";}
    else if ($i % 3 == 0) {echo "bum ";}
    else if ($i % 5 == 0) {echo "prask ";}
    else {echo $i . " ";}
}