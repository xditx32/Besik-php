<?php

// explain IF
$nilai = 75;
$lulus = 80;
$remidial = 60;

    if($nilai > $lulus) { 
        echo "Nilai Kamu: $nilai "."Lulus";
    }elseif($nilai > $remidial){
        echo "Nilai Kamu: $nilai "."Ramedial";
    }else{
        echo "Nilai Kamu: $nilai "."Tidak Lulus";
    }

echo "\n";

// explain Switch
$bulan = 12;
switch ($bulan) {
    case 1:
        echo "Bulan ke-".$bulan." Januari";
        break;
    case 2:
        echo "Bulan ke-".$bulan." Februari";
        break;
    case 3:
        echo "Bulan ke-".$bulan." Maret";
        break;
    case 4:
        echo "Bulan ke-".$bulan." April";
        break;
    case 5:
        echo "Bulan ke-".$bulan." Mei";
        break;
    case 6:
        echo "Bulan ke-".$bulan." Juni";
        break;
    case 7:
        echo "Bulan ke-".$bulan." Juli";
        break;
    case 8:
        echo "Bulan ke-".$bulan." Agustus";
        break;
    case 9:
        echo "Bulan ke-".$bulan." September";
        break;
    case 10:
        echo "Bulan ke-".$bulan." Oktober";
        break;
    case 11:
        echo "Bulan ke-".$bulan." Novermber";
        break;
    case 12:
        echo "Bulan ke-".$bulan." Desember";
        break;
    
    default:
        echo "Bulan ke-".$bulan." Tidak ada bulan";
        break;
}

//documents @2016 xditx32
?>