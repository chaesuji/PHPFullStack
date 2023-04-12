<?php
    // post method
    // - request 할 때의 데이터를 외부에서 볼 수 없음

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
    <!-- form 태그로 request -->
    <form action="20_2_ex2_http_post.php" method="post">
        <input type="text" name="p_test1"><br>
        <input type="text" name="p_test2"><br>
        <input type="hidden" name="p_hidden" value="aaa"><br>
        <button type="submit">submit</button>
    </form>
</body>
</html>