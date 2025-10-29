<?php
    echo("<h3>Funkcje</h3>");

    $first = 12;
    $second = 7;

    $sum = suma($first, $second);

    printf("%d + %d = %d<br>", $first, $second, $sum);

    function suma($a, $b) {
        $sum = $a + $b;
        return $sum;
    }

?>