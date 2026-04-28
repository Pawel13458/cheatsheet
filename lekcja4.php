<?php
$a = 12;
$b = 8;

echo "Wartości początkowe: a = $a, b = $b\n";

while ($a != $b) {
    if ($a > $b) {
        $a = $a - $b;
    } else {
        $b = $b - $a;
    }
}

echo "Największy wspólny dzielnik (NWD) wynosi: " . $a;
?>
