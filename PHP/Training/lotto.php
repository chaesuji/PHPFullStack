<?php
$num = 6;
$i = 0;
    for($i=0; $i<$num; $i++){
        $rand = rand(1,45);
        echo $rand." ";
        $rand_check = $rand;
        if($rand_check = $rand){
            rand(1, 45);
        }
    }

    // while($i < $num){
    //     $rand = rand(1,45);
    //     echo $rand." ";
    //     $rand_check = $rand;
    //     if($rand_check = $rand){
    //         rand(1,45);
    //     }
    //     $i++;
    // }
?>