<?php
    // get method로 사용자가 입력한 데이터를 http request를 합니다
    // 입력한 데이터의 상세 내역은 아래와 같습니다
    //  key : id, pw, name, birth_date
    // 각각의 데이터 출력
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
    <!-- form 태그를 이용하는 방법  -->
    <form method="get">
        <label for="id">ID</label>
        <input type="text" name="id" id="id"><br>
        <label for="pw">PW</label>
        <input type="password" name="pw" id="pw"><br>
        <label for="name">NAME</label>
        <input type="text" name="name" id="name"><br>
        <label for="birth">BIRTH</label>
        <input type="date" name="birth_date" id="birth"><br>
        <button type="submit">submit</button>
    </form>
<?php
    $method_get = $_GET;
    echo "<br>";
    foreach ($method_get as $key => $value) {
        echo $key." : ".$value."<br>";
    }

?>
</body>
</html>
