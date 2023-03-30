<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""></form>
</body>
</html>
<?php
    // rand(시작점, 끝점) : 무작위
    // echo rand(0, 10); 

    $rsp = rand(0, 2);
    $A = "";

    if($rsp === 0) {
        $A = "가위";
    } else if($rsp === 1) {
        $A = "바위";
    } else {
        $A = "보";
    }
    echo $A;

    $rsp = rand(3, 5);
    $B = "";

    switch ($rsp) {
        case 3:
            $B = "가위";
            break;
        case 4:
            $B = "바위";
            break;
        default:
            $B = "보";
            break;
    }
    echo $B, "\n";

    $tot = "결과는 ";
    $tot_1 = "";
    $A_1 = "A ($A)";
    $B_1 = "B ($B)";

    if($A === "가위" && $B === "보") {
        $tot_1 = "$A_1 가 이겼습니다.";
    } else if($A === "보" && $B === "바위") {
        $tot_1 = "$A_1 가 이겼습니다.";
    } else if($A === "바위" && $B === "가위") {
        $tot_1 = "$A_1 가 이겼습니다.";
    } else if($A === "바위" && $B === "보") {
        $tot_1 = "$B_1 가 이겼습니다.";
    } else if($A === "보" && $B === "가위") {
        $tot_1 = "$B_1 가 이겼습니다.";
    } else if ($A === "가위" && $B === "바위") {
        $tot_1 = "$B_1 가 이겼습니다.";
    } else {
        $tot_1 = "무승부";
    }
    
    echo $tot.$tot_1;
?>
