<?php

    $num = 8;
    echo("Liczba: " + $num + " to słownie: ");
    swith($num) {
        case 8: echo("Osiem"); break;
        case 0: echo("Zero"); break;
        default: echo("Nie potrafię tego przetłumaczyć");
    }
?>