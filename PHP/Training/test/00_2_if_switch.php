<?php
    // 조건문
    // IF 
    $i = 1; 
    if($i % 2 === 0){
        echo "짝수";
    }else {
        echo "홀수";
    }

    $i = "1";
    if($i === "1"){
        echo "문자열 1입니다.";
    }else if($i === 1){
        echo "숫자 1입니다.";
    }else{
        echo "1이 아닙니다.";
    }

    // 과목 종류 국어, 영어, 수학, 과학 / 평균 점수가 60점 이상이고 각 과목별 점수가 40점 이상일 때 "합격"을 출력, 그 외는 "불합격"을 출력하는 프로그램을 만들어주세요
    $ko = 70;
    $en = 90;
    $ma = 0;
    $sc = 90;
    $sum = $ko+$en+$ma+$sc;
    $avg = ($ko+$en+$ma+$sc) / 4;

    // 평균이 60점 이상이고 각 과목별 점수가 40점 이상일 때 합격, 아닐 시 불합격
    if($ko >= 40 && $en >= 40 && $ma >= 40 && $sc >= 40 && $avg >= 60 ){
        echo "합격(총점:$sum | 평균:$avg)";
    }else{
        echo "불합격(총점:$sum | 평균:$avg)";
    }

    // 평균이 60점 이상이거나 각 과목별 점수가 40점 이상일 때 합격, 아닐 시 불합격
    if($avg >= 60 || ($ko >= 40 && $en >= 40 && $ma >= 40 && $sc >= 40)){
        echo "합격(총점:$sum | 평균:$avg)";
    }else{
        echo "불합격(총점:$sum | 평균:$avg)";
    }

    // SWITCH 
    // $str_loc 에 지역명을 저장하고 서울은 "서울 사람" 대구는 "대구 사람" 부산은 "부산 사람" 그 외는 "타지역 사람"을 출력하는 프로그램을 switch문으로 만들어주세요.
    $str_loc = "강릉";
    switch ($str_loc) {
        case '서울':
            echo "서울 사람";
            break;
        
        case '대구':
            echo "대구 사람";
            break;

        case '부산':
            echo "부산 사람";
            break;
        
        default: 
            echo "타지역 사람";
            break;
    }

    // 반복문
    // WHILE : 조건을 체크하고 연산을 실행
    // break : 루프 종료
    $i = 1;
    while($i === 1) {
        echo $i;
        break;
    }
    while(true) {
        echo $i;
        break;
    }

    // DO WHILE : do에 있는 실행문을 실행 한 후 while의 조건을 통해 루프를 계속 할 것인지 정함
    do{
        echo $i;
    }while ($i !== 1);

    // FOR : 시작과 끝을 지정(=루프의 횟수를 지정)
    for ($i=0; $i < 2; $i++) { 
        echo $i;
    }

    // 숫자 1부터 50까지 반복문을 이용해서 더하는 프로그램을 만들어주세요
    $z=0;
    for ($i=1; $i<=50; $i++) { 
        $z += $i;
    }
    echo "\n".$z;

    while ($i <= 50) {
        $z += $i;
        $i++;
    }
    echo "\n".$z;
?>