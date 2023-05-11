<?php

session_name("Kim"); // 이름 설정을 할거면 세선 시작 전에 
session_start();

// session 파기
// session_destroy();

// var_dump($_SESSION);

// session 정보 삭제 (session이 파기되는 것은 아님)
session_unset(); // session 전체 정보 삭제
unset($_SESSION["del"]); // session 특정 요소를 삭제

?>