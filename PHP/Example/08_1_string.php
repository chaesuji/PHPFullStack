<?php
    // 문자열 합치기 (.)
    $str_1 = "aaa";
    $str_2 = "bbb";
    $str_sum = $str_1.$str_2;
    echo $str_sum."\n";

    // 대/소문자 변환
    $str_eng = "abcd efgh";
    
    // strtolower : 소문자로 변환
    echo strtolower($str_eng)."\n";
    // strtoupper : 대문자로 변환
    echo strtoupper($str_eng)."\n";
    // ucfirst : 맨 앞 글자만 대문자로 변환
    echo ucfirst($str_eng)."\n";
    // unwords : 각각 단어의 첫 글자를 대문자로 변환
    echo ucwords($str_eng)."\n";

    // url(사이트 주소) 관련 함수
    $url = "https://www.google.co.kr/?hl=ko";
    $arr_url = parse_url($url);
    var_dump($arr_url);

    parse_str($arr_url["query"], $arr_parse);
    var_dump($arr_parse);
?>