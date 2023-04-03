<?php
    // 함수 : 코드의 재사용성 증가, 가독성 증가
    // ------------------------------------ 함수 작성 시 이렇게 주석 작성
    // 함수명 : clean_class_room
    // 기능   : 이름과 구역을 받아 청소 지정 문자열을 반환
    // 파라미터 : $param_name string / $param_loc string 
    // 리턴 : $result_str string
    // ------------------------------------
    echo "";
    function clean_class_room($param_name, $param_loc){
        $result_str = $param_name."씨, ".$param_loc."을/를 청소해주세요\n";
        // echo $result_str;
        return $result_str; // return 함수 : 값을 다시 되돌려주는 함수, 
    }

    // clean_class_room("봉정", "책상");
    $result_str = clean_class_room("봉정", "책상");
    echo $result_str;
    clean_class_room("##", "책상"); // 리턴 값에 값이 담겨지지 않음

    // -------------------------------------
    // 함수명 : my_sum_all
    // 기능 : 1 ~ 지정 숫자까지 합을 구해서 리턴
    // 파라미터 : $param_int int
    // 리턴값 : $result_int int
    // -------------------------------------
    
    function my_sum_all($param_int){
        $result_int = 0;
        $i = 1;
        // for($i=1; $i<=$param_int; $i++){
        //     $result_int += $i;
        // }
        while($i <= $param_int){
            $result_int += $i;
            $i++;
        }
        return $result_int;
    }
    $result_int = my_sum_all(50);
    echo $result_int;
?>