<?php
// 성적 
// 100 : A+ 
// 90~100 : A 
// 80~90 : B 
// 70~80 : C 
// 60~70 : D 
// ~60 : F

    $score = 87;
    $score_100 = "당신의 점수는 $score 입니다. <A+>";
    $score_90 = "당신의 점수는 $score 입니다. <A>";
    $score_80 = "당신의 점수는 $score 입니다. <B>";
    $score_70 = "당신의 점수는 $score 입니다. <C>";
    $score_60 = "당신의 점수는 $score 입니다. <D>";
    $score_50 = "당신의 점수는 $score 입니다. <F>";

    // if ($score == 100) {
    //     echo $score_100;
    // } else if ($score >= 90) {
    //     echo $score_90;
    // } else if ($score >= 80) {
    //     echo $score_80;
    // } else if ($score >= 70) {
    //     echo $score_70;
    // } else if ($score >= 60) {
    //     echo $score_60;
    // } else if ($score > 60) {
    //     echo $score_50;
    // } else {
    //     echo "잘못된 값을 입력 했습니다.";
    // }

    $score = 50;
    $what_score = "당신의 점수는 $score 입니다.";
    $grade = "";
    $no_score = "";

    // if ($score == 100) {
    //     $grade = "<A+>";
    // } else if ($score >= 90) {
    //     $grade = "<A>";
    // } else if ($score >= 80) {
    //     $grade = "<B>";
    // } else if ($score >= 70) {
    //     $grade = "<C>";
    // } else if ($score >= 60) {
    //     $grade = "<D>";
    // } else if ($score < 60) {
    //     $grade = "<F>";
    // } else {
    //     $no_score = "잘못된 값을 입력 했습니다.";
    // }
    // echo $score <= 0 || $score > 100 ? $no_score : $what_score.$grade;


    if($score <= 0 || $score > 100) {
        echo "잘못된 값을 입력 했습니다.";
    }else {
        if ($score == 100) {
            $grade = "<A+>";
        } else if ($score >= 90) {
            $grade = "<A>";
        } else if ($score >= 80) {
            $grade = "<B>";
        } else if ($score >= 70) {
            $grade = "<C>";
        } else if ($score >= 60) {
            $grade = "<D>";
        } else {
            $grade = "<F>";
        }
        echo $what_score.$grade;
    }

    
?>