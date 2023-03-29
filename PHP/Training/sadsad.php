<?php
    $arr = array(5, 10, 7, 3, 1);

    foreach ($arr as $key => $value) {
        echo $key." > ".$value."\n";
    }

    echo "\n";

    for($a=0; $a<count($arr); $a++){
        echo $a." > ".$arr[$a]."\n";
    }

    echo "\n";

    $a = 0;
    while($a < count($arr)){
        echo $a." > ".$arr[$a]."\n";
        $a++;
    }

?>