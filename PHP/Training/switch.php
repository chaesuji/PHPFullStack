<?php

    $score = 101;
    $what_score = "당신의 점수는 $score 입니다";
    $grade = "";

    // switch ($score) {
    //     case 100:
    //         $grade = " <A+>";
    //         break;
    //     case 90:
    //         $grade = " <A>";
    //         break;
    //     case 80:
    //         $grade = " <B>";
    //         break;
    //     case 70:
    //         $grade = " <C>";
    //         break;
    //     case 60:
    //         $grade = " <D>";
    //         break;
    //     default:
    //         echo "잘못된 값을 입력 했습니다.";
    //         break;
    // }
    // echo $score >= 60 ? $what_score.$grade : " ";

    if ($score <= 0 || $score > 100) {
        echo "잘못된 값을 입력 했습니다.";
    } else {
        switch ($score) {
            case 100:
                $grade = " <A+>";
                break;
            case $score >= 90:
                $grade = " <A>";
                break;
            case $score >= 80:
                $grade = " <B>";
                break;
            case $score >= 70:
                $grade = " <C>";
                break;
            case $score >= 60:
                $grade = " <D>";
                break;
            default:
                $grade = " <F>";
                // echo "잘못된 값을 입력 했습니다.";
                break;
        }
        echo $score <= 100 ? $what_score.$grade : " ";
    }
?>