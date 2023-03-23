<?php
    // 1. while문 : 조건을 계산해 값이 참인 동안 반복
    //  while(조건) { 반복하고 싶은 처리(연산) }

    // $i = 0;
    // while( $i < 10 ) {
    //     echo $i++;
    // }

    // $dan = 2;
    // $num = 1;
    // while($num < 10) {
    //      $result = $dan." * ".$num." = ".$dan*$num."\n";      
    //     echo $result;
    //     $num++;
    //     } 

    $max_dan = 19;
    while($dan < $max_dan) {
        echo $dan,"단\n";
        $num = 1;
        while($num < $max_dan) {
            $result = $dan." * ".$num." = ".$dan*$num."\n";
            echo $result;
            ++$num;
        }
        ++$dan;
    }
?>