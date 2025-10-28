<?php
    echo("<h3>Przykład użycia pętli do while</h3>");
    $i = 1;
    do {
        $result = $i * $i;
        printf("%d * %d = %d<br>", $i, $i, $result);
        $i++;
    } while($i < 10);

?>