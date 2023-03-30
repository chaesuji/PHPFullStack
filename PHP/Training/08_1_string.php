<?php
    // 문자열 자르기로 "PHP입니다."만 출력해주세요
    $str_php = "안녕하세요. PHP입니다.";
    echo mb_substr($str_php, -7);

    // "세요. P"만 출력해주세요
    echo "\n";
    echo mb_substr($str_php, 3, 5);

    // 기본 포맷 : ERROR(숫자) : XXX ERROR가 발생했습니다.
    // 에러 번호 : 에러 종류
        // 1 : 시스템
        // 2 : 로그인
        // 3 : 접속

    echo "\n";
    define("ERROR_MSG", "ERROR %d : %s ERROR가 발생했습니다");
    $i = 2;
    if($i === 1){
        printf(ERROR_MSG, 1, "시스템");
    } else if ($i === 2){
        printf(ERROR_MSG, 2, "로그인");
    } else {
        printf(ERROR_MSG, 3, "접속");
    }

    // "I am always Hello."에서 "Hello"를 "Happy"로 바꾸어 출력하는 프로그램을 구현해주세요
    $i_am = "I am always Hello.";

    echo "\n";
    $hello = explode(" ", $i_am);

    print_r($hello);
    
    for($i=0; $i<count($hello); $i++){
        if($hello[$i] === "Hello."){
            $hello[$i] = "Happy.";
        }
        echo " ",$hello[$i];
    }
    echo "\n";
    print_r($hello);

    // ----------------------------------------

    // $hello = explode("Hello", $i_am);
    // $happy_impl = implode("Happy", $hello);
    // echo $happy_impl;

    // var_dump($hello);
    
    // 함수명 : my_str_replace(), 리턴 값 : string, 변수명 : $result_str

    $before_str = "Hello";
    $after_str = "Happy";
    function my_str_replace($i_am, $before_str, $after_str){
        
        $result = explode($before_str, $i_am);
        return implode($after_str, $result);
    }
    
    echo my_str_replace($i_am, "am", "Apple");

    echo "\n".str_replace("Hello", "Happy", $i_am);
?>