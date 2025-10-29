<?php
    echo("<h3>Operatory logiczne</h3>");

    $first = 12;
    $second = 12;

    if($first == $second) {
        printf("Liczby %d i %d sa sobie rowne<br>", $first, $second);
    }

    $first = 34;

    if($first != $second) {
        printf("Liczby %d i %d sa rozne<br>", $first, $second);
    }

    if($first > $second) {
        printf("%d, %d - pierwsza jest wieksza<br>", $first, $second);
    }

    $second = 68;
    if($first < $second) {
        printf("%d, %d - pierwsza jest mniejsza<br>", $first, $second);
    }
?>