<?php
    // 파일을 여는 방법 : fopen(파일 위치, 파일 여는 방식)
    $f_food = fopen("./sam/food.txt", "r"); // r 읽기 전용

    // var_dump($f_food);

    // 파일을 한 줄씩 읽어오는 방법 : fgets (fopen으로 연 파일을 닫음)
    // print fgets($f_food);

    // while(!feof($f_food)){
    //     print fgets($f_food);
    // }

    while($line = fgets($f_food)){
        print $line;
    }

    fclose($f_food);
    // $f_food = fopen("./sam/food.txt", "w"); // w 쓰기 전용, 포인터가 파일 시작부분에서 시작
    $f_food = fopen("./sam/food.txt", "a"); // a 쓰기 전용, 포인터가 파일의 끝부분에서 시작
    // 파일에 내용 추가 : fputs(fopen한 파일, 추가할 내용)
    fputs($f_food, "탕수육");
    fputs($f_food, "\n돈까스");

    // 파일을 닫는 방법 : fclose (fopen으로 연 파일을 닫음)
    fclose($f_food);

    
?>