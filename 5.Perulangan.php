<?php

// explain For
$a = 1;
    for ($a; $a <= 10; $a++) { 
        echo $a." ";
    }

echo "\n";

// explain While
$b = 1;
    while ($b <= 10) {
        echo $b." ";
        $b++;
    }

echo "\n";

// explain While Do
$c= 1;
    do {
        echo $c." ";
        $c++;
    } while ($c <= 10);

echo "\n";

// explain Foreach
$d = array("Appel" ,"Mangga" ,"Jeruk" ,"Pisang", "Melon");
foreach ($d as $key => $value) {
    echo $key=$value[0]." ";
}

//documents @2016 xditx32
?>