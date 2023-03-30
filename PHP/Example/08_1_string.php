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

    // 역순의 문자열
    $str_abcd = "abcd";
    echo strrev($str_abcd),"\n";

    // 문자열 자르기
    // mb_string : mb_str(string ,자를 글자수 글자 수, 자를 글자 수에서 n번째 글자)
    $str_11 = "가나다라마";
    // echo substr($atr_11, 2);
    echo mb_substr($str_11, 2);
    echo mb_substr($str_11, -2),"\n"; // 음수 : 뒤에서부터 자름

    // 문자열 빈 공간(공백) 지우기 > "\n", tap, space
    $str_trim = "          abcd         ";
    echo trim($str_trim);
    echo rtrim($str_trim); // 오른쪽 공백 지우기
    echo ltrim($str_trim); // 왼쪽 공백 지우기

    // 문자열의 길이를 구하는 함수
    $str_len = "abcd";
    $mbstr_len = "가나다라";

    echo strlen($str_len);
    echo strlen($mbstr_len);
    echo mb_strlen($mbstr_len)."\n";

    // 문자열 포맷에 따라 출력하는 함수
    printf("안녕하세요. %s입니다. %d", "PHP", 1234);
    echo "\n";
    define("WELCOME", "안녕하세요. %s님");
    printf(WELCOME, "홍길동");

    // 문자열을 분리하는 함수
    $str_sscanf = "가나다라 50 abcd";
    sscanf($str_sscanf, "%s %d %s", $str_ko, $int_num, $str_eng);
    echo "\n", $str_ko, "\n", $int_num, "\n", $str_eng, "\n";

    // 문자열을 반복해서 찍어주는 함수
    echo str_repeat("가나다", 3);

    // 문자열을 특정 문자열로 분리하는 함수
    $str_expl = "홍길동, 27세, 남자, 의적, 조선";
    $arr_expl = explode(",", $str_expl); // 구분할 문자, 문자열
    print_r($arr_expl);

    // 배열을 특정 문자열로 합치는 함수 : implode()
    $str_impl = implode("123", $arr_expl);
    echo $str_impl;
?>