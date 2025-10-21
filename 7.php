<?php
    echo("<h3>Przykład pętli while</h3>");
    $i = 1;
    while( $i <= 10) {
        $result = $i * $i;
        printf("%d * %d = %d <br>", $i, $i, $result);
        $i++;
    }
?>