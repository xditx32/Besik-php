<?php

// explain Variable
$var1 = 6;
$var2 = 10.6;
$var3 = true;
$var4 = "Hi, Kalian";
$var5 = array('1, 2, 3');
$var6 = null;
$var7 = new stdClass;
$var8 = tmpfile();

    echo gettype($var1)."\n";
    echo gettype($var2)."\n";
    echo gettype($var3)."\n";
    echo gettype($var4)."\n";
    echo gettype($var5)."\n";
    echo gettype($var6)."\n";
    echo gettype($var7)."\n";
    echo gettype($var8)."\n";

// explain Konstanta
define("var7", 3.14);
    echo var7;

//documents @2016 xditx32
?>