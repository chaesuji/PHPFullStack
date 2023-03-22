<?php
    $tng_num = 10;
    $tng_num_2 = 5;
    $tng_num_3 = 4;
    $tng_num_4 = 7;
    $tng_num_5 = 3;

    // 산술 연산자
    echo "\n $tng_num + 10 = ",$tng_num + 10;
    echo "\n $tng_num / 5 = ",$tng_num / 5;
    echo "\n $tng_num - 4 = ",$tng_num - 4;
    echo "\n $tng_num % 7 = ",$tng_num % 7;
    echo "\n $tng_num * 3 = ",$tng_num * 3;

    echo ("\n-------------------------------");

    // 산술 대입 연산자
    echo "\n $tng_num += 10 = ",$tng_num += 10;
    echo "\n $tng_num /= 5 = ",$tng_num /= 5;
    echo "\n $tng_num -= 4 = ",$tng_num -= 4;
    echo "\n $tng_num %= 7 = ",$tng_num %= 7;
    echo "\n $tng_num *= 3 = ",$tng_num *= 3;

    // echo "\n $tng_num += 10 = ",$tng_num += $tng_num;
    // echo "\n $tng_num /= 5 = ",$tng_num /= $tng_num_2;
    // echo "\n $tng_num -= 4 = ",$tng_num -= $tng_num_3;
    // echo "\n $tng_num %= 7 = ",$tng_num %= $tng_num_4;
    // echo "\n $tng_num *= 3 = ",$tng_num *= $tng_num_5;

    $t1 = 0;
    $t2 = $t1 + 1;
    $t3 = $t1 + $t2;

    echo $t1, $t2, $t3;

    
?>