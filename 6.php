<?php
    echo("<h3>Przykład pętli for</h3>")
    for($i = 0; $i <= 10; ++$i) {
        $result = $i * $i;
        
        printf("%d * %d = %d <br>", $i, $i, $result);
    }
?>