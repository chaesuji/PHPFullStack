<?php
    // 파일을 여는 방법 : fopen(파일 위치, 파일 여는 방식)
    $f_open = fopen("./sam/food.txt", "r"); // r(=read) 읽기 전용
    // var_dump($f_open);

    // 파일을 한 줄씩 읽어오는 방법 : fgets (fopen으로 연 파일을 닫음)
    // print fgets($f_open);
    // print fgets($f_open);
    // print fgets($f_open);
    // print fgets($f_open);
    // print fgets($f_open);
    // print fgets($f_open);

    // for($i=0; $i<=$f_open; $i++){
    //     print fgets($f_open);
    // }

    while(!feof($f_open)){
        print fgets($f_open);
    }

    // 파일을 닫는 방법 : fclose (fopen으로 연 파일을 닫음)
    fclose($f_open);

    
?>