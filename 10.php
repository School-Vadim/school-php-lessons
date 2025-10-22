<?php
    echo("<h3>Operatory arytmetyczne</h3>");

    $fisrt = 10;
    $second = 6;

    printf("%d + %d = %d <br>", $first, $second, $first + $second);
    printf("%d - %d = %d <br>", $first, $second, $first - $second);
    printf("%d * %d = %d <br>", $first, $second, $first * $second);
    printf("%d / %d = %d <br>", $first, $second, $first / $second);
    printf("%d %% %d = %d <br>", $first, $second, $first % $second);

    //etc
    $a = $b = $c = $d = 5;
    pritnf("<br>Operator preinkrementacji ++\ $a = %d", ++$a);
    pritnf("<br>Operator postinkrementacji $b++ = %d", $b++);
    pritnf("<br>Operator predekrementacji --\ $c = %d", --$c);
    pritnf("<br>Operator postdekrementacji $a++ = %d", $d--);

    printf("<br>");

    printf("<br>\ $a = %d", $a);
    printf("<br>\ $b = %d", $b);
    printf("<br>\ $c = %d", $c);
    printf("<br>\ $d = %d", $d);
?>