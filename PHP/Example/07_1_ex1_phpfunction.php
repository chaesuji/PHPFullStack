<?php
    // min, max, floor, round, ceil, rand
    echo floor(4.9)."\n";
    echo round(4.5)."\n";
    echo ceil(4.1)."\n";

    echo min(array(3,4,5,6,1,2))."\n";
    echo max(array(3,4,5,6,1,2))."\n";

    echo rand(0,2)."\n";

    // 날짜 관련 함수
    echo time()."\n";
    echo date('Y-M-d H:i:s')."\n"; // Y = 2023 / H = 24시 기준
    echo date('y-m-d h:i:s')."\n"; // y = 23 / h = 12시 기준

    // 고정밀도 계산 함수
    echo 1000000000000000000000;

    // 난수 함수
    echo "\n".mt_rand(0,3);

    // 운영체제, php 버전, GLOBALS 정보 상수, 변수 및 함수
    // (상수 = 단순한 값을 위한 식별자, 변하지 않는 값 / 변수는 변하는 값)
    // echo PHP_OS."\n";
    // echo PHP_VARSION."\n";
    // var_dump($GLOBALS);
    // var_dump(phpinfo());

    // difine(상수 이름, 상수 값) / 상수 이름은 꼭 모든 문자를 대문자로 작성
    define("INT_ONE", 1);

    echo "\n".INT_ONE;
    // echo $INT_ONE;
?>