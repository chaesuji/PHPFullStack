<?php 
    // array
    // 0, 1, 2 = 배열은 0부터 시작
    $week = array("Sun", "Mon", "Tue", "Wed");
    // echo $week[1];
    // echo "\n";

    // 배열 안에 변수
    $mon = "Mon";
    $sun = "Sun";
    $tue = "Tue";
    $wed = "Wed";
    $week1 = array($sun, $mon, $tue, $wed);
    // echo $week1[2];
    // echo "\n";
    $week2 = array($week[0], $week[1], $week[2], $week[3]);
    // echo $week2[3];
    // echo "\n";

    // Mon, Wed, Sun, Tue
    $week2 = array($week[1], $week[3], $week[0], $week[2]);
    // echo $week2[0];
    // echo $week2[1];
    // echo $week2[2];
    // echo $week2[3];

    // 멀티 타입 배열 > 문자(''), 문자열(""), 숫자, 소수점
    $arr_mult_type = array("aaa", 1, 3.14, 'a');
    // echo "\n";
    // echo $arr_mult_type[2];
    // var_dump ($arr_mult_type);

    // 연상 배열 > key 값으로 값을 가져옴(배열 순서 X)
    // 문자, 문자열, 숫자
    $arr_ass = array("key1" => "val1",
                    5 => "val2");
    // echo "\n";
    // echo $arr_ass[5];
    // var_dump ($arr_ass);

    // 다차원 배열
    // x, y축 
    $arr_temp = array(
                        array(1,2,3,4),
                        array(5,6,7,8),
                        array(
                            array(9,10,11,12) // 3차원 배열
                            ) 
                    );
    echo "\n";
    echo $arr_temp[1][3]; // 2차원
    echo "\n";
    echo $arr_temp[2][0][1]; // 3차원 > x,y,z

    // $arr_temp = array(
    //     array(1,2,3,4),
    //     array( 
    //         array(5,6,7,8),
    //         array(13,14,15,16)
    //     ),
    //     array(
    //         array(9,10,11,12)
    //         ) 
    // );
    // echo "\n";
    // echo $arr_temp[1][1][0];

    $arr_temp_3 = $arr_temp[0][2];
    $arr_temp_ = $arr_temp[2][0];

    // $arr_temp_3 = $arr_temp[2]; 
    // $arr_temp_3_c = array(
    //                         array(9,10,11,12)
    //                     );
    // echo $arr_temp_3_c;

    // 배열의 원소 삭제 : unset()
    $arr_week = array("Sun", "Mon", "delete", "Tue", "Wed");
    unset($arr_week[2]); // unset으로 삭제된 값의 방 숫자는 당겨지지 않고 그대로
    print_r($arr_week);

    
?>