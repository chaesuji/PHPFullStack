<?php
    // post method로 사용자가 입력한 데이터를 http request를 합니다
    // 입력한 데이터의 상세 내역은 아래와 같습니다
    //  key : id, pw, name, birth_date
    // 유저가 입력하지 않은 데이터도 함께 전송
    //  key : h_page, val : h1
    // echo를 이용해 각각의 데이터 출력
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="id">ID</label>
        <input type="text" id="id" name="id"><br>
        <label for="pw">PW</label>
        <input type="password" id="pw" name="pw"><br>
        <label for="name">NAME</label>
        <input type="text" id="name" name="name"><br>
        <label for="birth">BIRTH</label>
        <input type="date" id="date" name="birth"><br>
        <input type="hidden" name="h_page" value="h1"><br>
        <button type"submit">submit</button>
    </form>
</body>
</html>
<?php

    $method_post = $_POST;
    // var_dump($method_post);
    echo "<br>";
    foreach ($method_post as $key => $value) {
        echo $key." : ".$value."<br>";
    }
?>