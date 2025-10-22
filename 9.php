<?php
    echo("<h3>Przykład intrsukcji continue i break</h3>");

    for($i = 0; $i <= 10; ++$i) {
        if($i == 5) {
            echo("Instrukcja continue");
            continue;
        }

        echo("$i<br>");

        if($i == 7) {
            echo("Instrukcjs break");
            break;
        }
    }

?>