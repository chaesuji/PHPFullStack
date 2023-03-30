<?php
    // 1. 반복문을 이용해서 아래와 같이 출력해주세요
    // *
    // **
    // ***
    // ****
    // *****
        $num = 5;
        // for($i=1; $i<=$num; $i++){
        //     for($z=0; $z<$i; $z++){
        //         echo "*";
        //     }
        //     echo "\n";
        // }

        // for($i=1; $i<=$num; $i++){
        //     for($z=5; $z>=$i; $z--){
        //         echo "*";
        //     }
        //     echo "\n";
        // }

        // for($i=1; $i<=$num; $i++){
        //     for($z=0; $z<$num-$i; $z++){
        //         echo " ";
        //     }
        //     for($s=1; $s<=$i; $s++){
        //         echo "*";
        //     }
        //     echo "\n";
        // }

        // for($i=1; $i<=$num; $i++){
        //     for($s=1; $s<$i; $s++){
        //         echo " ";
        //     }
        //     for($z=5; $z>=$i; $z--){
        //         echo "*";
        //     }
        //     echo "\n";
        // }

        for($i=1; $i<=$num; $i++){
            for($s=1; $s<=$num-$i; $s++){
                echo " ";
            }
            for($z=1; $z<=$i; $z++){
                echo "*";
            }
            echo "\n";
        }

        $i = 1;
        $z = 1;
        // while($i <= $num){ // 1 <= 5
        //     while($z <= $i){ // 1 <= 1
        //         echo "*"; 
        //         $z++; // $z+1 > 2 <= 1 > loopX
        //     }
        //     $z = 1;
        //     echo "\n"; 
        //     $i++;
        // }
?>