<?php

$user_id = "php506";
$user_pw = "506";

// session명 지정, 지정하지 않으면 "PHPSESSID"로 지정됩니다.
session_name("Kim");

// session 시작 : 시작함과 동시에 세션이 있으면 기존꺼를 사용하고 없으면 새로 만듬
session_start();

// --------------------
// 유저 인증 작업 필요 / 지금은 생략
// --------------------

// session에 데이터 저장
$_SESSION["id"] = $user_id;
$_SESSION["del"] = "delete";

?>