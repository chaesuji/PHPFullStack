<?php
// if(조건) {} else {}

    $num = 3;
    $num = -4;

    if($num === 0) { // 조건이 참일 경우 중괄호{} 안의 연산 실행
        echo "0 입니다";
    } else if ($num === 1) {
        echo "1 입니다";
    } else if ($num === 2) {
        echo "2 입니다";
    } else if ($num === 3) {
        echo "3 입니다";
    } else { // 조건이 거짓일 경우 
        echo "모르겠다";
    }
?>