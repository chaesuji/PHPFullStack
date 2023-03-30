<?php
    // echo ("점심메뉴 \n 탕수육 8,000 \n 짜장면 6,000 \n 짬뽕 6,000");

    // $tang = "탕수육 8,000";
    // $zza= "짜장면 6,000";
    // $zzam  = "짬뽕 6,000";
    $tang = "탕수육";
    $zza= "짜장면";
    $zzam  = "짬뽕";

    $blank = " ";
    $line = "\n";
    $price_8000 = "8,000";
    $price_6000 = "6,000";

    //echo ("점심메뉴 \n 탕수육 $tang \n 짜장면 $zzazzam \n 짬뽕 $zzazzam");
    
    // 문자열 합치기 .
    echo "점심메뉴".$line;
    echo $tang.$blank.$price_8000.$line;
    echo $zza.$blank.$price_6000.$line;
    echo $zzam.$blank.$price_6000.$line;

?>