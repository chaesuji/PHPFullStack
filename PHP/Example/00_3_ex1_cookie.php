<?php

// cookie 작성 (이름, 값, 유효기간)
setcookie("name", "kim mihyeon", time() + 30);
setcookie("age", "26", time() + 300);

setcookie("age", "", 0);

echo $_COOKIE["name"];

?>