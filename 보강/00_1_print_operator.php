<?php
    // 콘솔에 출력
    print "프린트"; // echo보다 속도가 느림
    echo "에코"; //  속도가 빨라서 자주 쓰임

    print_r(array(1,2,3)); // key, value 순수한 값을 보여줌
    var_dump(array(1,2,3)); // 상세한 정보(사이즈, 정보 등)

    // 변수 : 정보들을 저장하는 장소, 영어(대/소문자), 숫자, 특수문자(_)만 사용
    $int_i = 1;
    echo $int_i;
    $sum = $int_i + 1;
    echo $sum;
    // 스네이크 기법 : 모든 문자 소문자, (_)로 단어 사이 연결 > arr_food
    // 캐멀 기법 : 단어 사이의 첫 글자 대문자 > ArrFood

    // 숫자 10을 변수 $i_ten, 숫자 5를 변수 i_five, 숫자 8를 i_eight , 3을 i_three에 저장하고
    // 아래 연산을 해주세요
    // 10 - 5 + 8 하고 3으로 나눈 나머지
    $i_ten = 10;
    $i_five = 5;
    $i_eight = 8;
    $i_three = 3;
    $aaa = ($i_ten - $i_five + $i_eight) % $i_three;
    echo $aaa;

    // 증가 연산자, 감소 연산자
    $i_increse = 0;
    $i_decrese = 0;
    
    ++$i_increse; // 전위 증가 연산자
    $i_increse++; // 후위 증가 연산자

    echo "\n".++$i_increse;
    echo "\n".$i_increse++;
    echo $i_increse;

    --$i_decrese; // 전위 감소 연산자
    $i_decrese--; // 후위 감소 연산자

    // 산술 대입 연산자
    $i = 0;
    $i += 2; // = $i = $i+2;
    $i -= 1;
    $i *= 2;
    $i /= 2;
    $i %= 2;
    $str = "aaa";
    $str .= "bbb"; // 문자열 대입 연산자
    echo $i;
    echo $str;

    // 비교 연산자 
    // $a < $b
    // $a > $b
    // $a <= $b
    // $a >= $b
    // $a != $b : a,b의 값이 다르다
    // $a !== $b : a,b의 값, 데이터 형식이 다르다
    // $a == $b : a,b의 값이 같다
    // $a === $b : a,b의 값, 데이터 형식이 같다
    // 데이터를 비교할 때는 데이터 형식까지 비교해서 버그 예방(!== , ===)
    $a = 1;
    $b = "1";

    var_dump($a != $b);
    var_dump($a !== $b);
    var_dump($a == $b);
    var_dump($a === $b);

    var_dump(false === 0);
    var_dump(false === null);
    var_dump(true === 1);
    
    // 논리 연산자
    // &&(and) : 모든 조건을 만족해야 할 때
    $i = 1;
    var_dump($i === 1 && $i <= 1);
    var_dump($i === 1 && $i < 1);
    var_dump($i === 1 && $i <= 1 && $i > 0);
    // ||(or) : 조건 중 하나만 만족해도 될 때
    var_dump($i === 1 || $i < 1 || $i > 0);
    // !(not) : 결과를 반전시킬 때 사용
    var_dump(!($i === 2)); // false - true , true - false

    // 3항 연산자 | 조건 ? 참 일 경우 : 거짓일 경우
    $i = 1;
    echo $i < 0 ? "000" : "111";
    $str = "";
    $i > 0 ? $str = "000" : $str = "111";
    echo $str;

    // 3항 연산자를 이용해서 짝수일 때 "짝수"를 출력 홀수일 때 "홀수"를 출력
    $i = 15;
    echo $i % 2 === 0 ? "짝수" : "홀수";
?>