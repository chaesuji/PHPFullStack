<?php
    // while + if
    $i = 0;
    while ($i <= 4) {
        if($i === 1){
            // echo "1입니다.";
        }else if($i === 4){
            // echo "4입니다.";
        }
        $i++;
    }

    // foreach + if
    $arr_ass = ["a"=>1, "b"=>2, "c"=>3, "d"=>4];
    foreach ($arr_ass as $key => $value) {
        if($key === "c" || $value === 2){
            // echo "if\n";
        }
    }

    // 이중루프
    for($i=2; $i<=9; $i++){
        // echo "$i 단\n";
        for($z=1; $z<=9; $z++){
            // echo "$i * $z = ".$i*$z."\n";
        }
    }

    // 1~100까지의 숫자 중에 짝수의 합
    $z=0;
    for($i=1; $i<=100; $i++){
        if($i % 2 === 0){
            $z += $i;
        }
    }
    // echo $z;

    $arr_test = array(
                        1,
                        2,
                        array(
                            "info_a"=>3,
                            "info_b"=>4,
                            "info_arr"=>
                                array(
                                    "f_1"=>5,
                                    "f_2"=>7
                                )
                        )
                    );
    // echo $arr_test["info"]["info_a"];
    // echo "\n".$arr_test["info"]["info_arr"]["f_2"];
    // echo $arr_test[2]["info_arr"]["f_1"];

    // 함수명 : fnc_sum
    // 파라미터 : int $param_a, int $param_b
    // 리턴 값 : int $sum
    // 기능 : 파라미터를 더한 값을 리턴

    function fnc_sum($param_a, $param_b){
        $sum = $param_a + $param_b;
        return $sum;
    }
    // echo fnc_sum(5,10);

    // 가변 파라미터
    function fnc_sum2(...$param_numbers){
        // $sum = 0;
        // foreach ($param_numbers as $value) {
        //     $sum += $value;
        // }
        // return $sum;
        return array_sum($param_numbers);
    }
    // echo fnc_sum2(3,4,5,6);

    function fnc_global(){
        global $global_i;
        static $static_i = 0;
        $global_i = 0;

    }
    $global_i = 5;
    // fnc_global();
    
    // echo $global_i;

    function fnc_static(){
        static $static_i = 0;
        echo $static_i;
        $static_i++;
    }
    // fnc_static();

    function fnc_reference( &$param_str){
        $param_str = "fnc_reference";
    }
    // $str = "aaa";
    // fnc_reference( $str );
    // echo $str;

    // function gugudan($param_dan){
    //     for ($num=1; $num<=9; $num++) { 
    //         $result = "$param_dan * $num = ".$param_dan*$num;
    //     }
    //     return $result;
    // }
    // echo gugudan(2);


    function print_star($star){
        for ($i=1; $i <=$star ; $i++) { 
            echo "*";
        }
        echo "\n";
    }  
    
    echo print_star(1);
    echo print_star(2);
    echo print_star(3);
    echo print_star(4);
    echo print_star(5);

?>