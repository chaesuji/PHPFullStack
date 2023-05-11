<?php

session_name("Kim");
session_start();

var_dump($_SESSION);
var_dump($_COOKIE);
var_dump("세션 아이디 : ".session_id()); // session_id를 반환

?>