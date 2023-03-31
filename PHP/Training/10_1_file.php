<?php
    // 파일명 : gugudan.txt
    // 내용은 아래와 같습니다
    // 2단
    // 2 * 1 = 2 ...
    // 파일 위치 : sam/

    $gugudan = fopen("./sam/gugudan.txt", "w");

    for($i=2; $i<=9; $i++){
        fputs($gugudan, "\n$i 단");
        for($z=1; $z<=9; $z++){
            fputs($gugudan, "\n$i * $z = ".$i*$z);
        }
    }

    fclose($gugudan);
    $gugudan_2 = fopen("./sam/gugudan_2.txt", "w");

    $i=1;;
        while($i < 10){
            if($i === 1){
                $str = "2단";
            }else{
                $str .= "\n2 * $i = ". 2*$i; // .= 문자열 합친 후 왼쪽 변수에 값 할당(산술 대입)
            }
            $i++;
        }
        echo $str;
        fputs($gugudan_2, $str);

    fclose($gugudan_2);

    $gugudan_3 = fopen("./sam/gugudan_3", "w");
    $print_gugudan = "";
    for($dan=2; $dan<=9; $dan++){
        $print_gugudan .= $dan."단 \n";
        for($num=1; $num<=9; $num++){
            $result = $dan." * ".$num." = ".$dan*$num."\n";
            $print_gugudan .= $result;
        }
    }
    fputs($gugudan_3, $print_gugudan);
    fclose($gugudan_3);

    // 구구단을 함수로 구현
    $gugudan_4 = fopen("./sam/gugudan_4", "w");
    // $str = "";
    // function gugudan($dan){
    //     for($i=0; $i<10; $i++){
    //         if($i==0){
    //             $str .= $dan."단\n";
    //         }else{
    //             $str .= $dan." * ".$i." = ".$dan*$i."\n";
    //         }
    //     }
    //     return $str;
    // }
    $str = "";
    function fnc_gugudan($dan){
        $str = "$dan 단\n";
        for($i=1; $i < 10; $i++){
            $str .= $dan." * ".$i." = ".$dan*$i."\n";
        }
        return $str;
    }
    fputs($gugudan_4, fnc_gugudan(2));
    fclose($gugudan_4);

    // 파일 내용 중간에 내용 넣기
    $f_food2 = file("./sam/food.txt");
    $print_food = "";
    foreach ($f_food2 as $val) {
        if(trim($val) === "국밥"){
            $print_food .= $val."스테이크\n";
        }else {
            $print_food .= $val;
        }
    }
    print $print_food;
    $f_foods = fopen("./sam/food.txt", "w");
    fputs($f_foods, $print_food);
    fclose($f_foods);
?>