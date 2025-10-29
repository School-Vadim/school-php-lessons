<?php

    echo("<h3>Operatory logiczne</h3>");

    $state = true;
    $text = "php";

    if($state && $text == "php")
        printf("Operator AND: &&<br>");
    if($state || $text == "OR")
        printf("Operator OR: ||<br>");
    if(!$state == false)
        printf("Operator regracji !<br>");
        
?>