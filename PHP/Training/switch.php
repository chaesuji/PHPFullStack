<?php

    $score = 30;
    $what_score = "당신의 점수는 $score 입니다";
    $grade = "";

    switch ($score) {
        case $score == 100:
            $grade = "<A+>";
            break;
        case $score == 90:
            $grade = "<A>";
            break;
        case $score == 80:
            $grade = "<B>";
            break;
        case $score == 70:
            $grade = "<C>";
            break;
        case $score == 60:
            $grade = "<D>";
            break;
        default:
            echo "잘못된 값을 입력 했습니다.";
            break;
    }
    echo $score >= 60 ? $what_score.$grade : " ";
?>