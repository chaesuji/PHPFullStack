<?php
$check = array();
    for($i=0; $i<6; $i++){
        $check[$i] = rand(1,45);
        for($j=0; $j<$i; $j++){
            if($check[$j] === $check[$i]){
                rand(1,45);
                $j--;
            }
        }
    }
    print_r($check);
?>