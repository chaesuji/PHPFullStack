<?php
    $kard = array(
        "♠A" => 11
        ,"♠2" => 2
        ,"♠3" => 3
        ,"♠4" => 4
        ,"♠5" => 5
        ,"♠6" => 6
        ,"♠7" => 7
        ,"♠8" => 8
        ,"♠9" => 9
        ,"♠10" => 10
        ,"♠J" => 10
        ,"♠K" => 10
        ,"♠Q" => 10

        ,"♣A" => 11
        ,"♣2" => 2
        ,"♣3" => 3
        ,"♣4" => 4
        ,"♣5" => 5
        ,"♣6" => 6
        ,"♣7" => 7
        ,"♣8" => 8
        ,"♣9" => 9
        ,"♣10" => 10
        ,"♣J" => 10
        ,"♣K" => 10
        ,"♣Q" => 10

        ,"♥A" => 11
        ,"♥2" => 2
        ,"♥3" => 3
        ,"♥4" => 4
        ,"♥5" => 5
        ,"♥6" => 6
        ,"♥7" => 7
        ,"♥8" => 8
        ,"♥9" => 9
        ,"♥10" => 10
        ,"♥J" => 10
        ,"♥K" => 10
        ,"♥Q" => 10

        ,"◆A" => 11
        ,"◆2" => 2
        ,"◆3" => 3
        ,"◆4" => 4
        ,"◆5" => 5
        ,"◆6" => 6
        ,"◆7" => 7
        ,"◆8" => 8
        ,"◆9" => 9
        ,"◆10" => 10
        ,"◆J" => 10
        ,"◆K" => 10
        ,"◆Q" => 10
    );

    $draw_u1 = " "; // 랜덤 카드 값(string) 저장용 변수
    $draw_u2 = " ";
    $draw_d1 = " ";
    $draw_d2 = " ";
    $draw_u = []; // 점수(int) 저장용 배열
    $draw_d = [];
    $plus_draw = []; // 카드 더 뽑기 점수(int) 저장용 배열 
    $user_plus_val = 0;
    $user_val = 0; // 점수 합계 저장용 변수
    $del_val = 0;

    while(true) {
        echo '게임시작';
        print "\n";
        echo '1 : 카드 더 받기 | 2 : 현재 카드, 카드의 합 보기 | 3 : 카드 비교하기 | 4 : 현재 카드의 합계 초기화 하기 | 5 ~ : 게임시작';
        print "\n";
        fscanf(STDIN, "%d\n", $input);  
        if($input === 0) {
            break;
        }else if($input === 1){
            echo "1. 카드 더 받기";
            $plus_draw_u = array_rand($kard);
            echo "\n추가 카드 : ".$plus_draw_u;
            $draw_plus_u[] = $kard[$plus_draw_u];
            $draw_ukey[] = $plus_draw_u;
            unset($kard[$plus_draw_u]);
            if($del_val < 17){
                $plus_draw_d = array_rand($kard);
                $draw_d[] = $kard[$plus_draw_d];
                $draw_dkey[] = $plus_draw_d;
                unset($kard[$plus_draw_d]);
            }
        }else if($input === 2){
            echo "2. 현재 카드의 합 보기\n";
            echo "현재 카드 : ";
            foreach ($draw_ukey as $key => $value) {
                echo $value;
            }
            foreach ($draw_plus_u as $value) {
                $user_plus_val += $value;
            }
            $user_total = $user_val + $user_plus_val;
            
            echo " 점수의 합 : ".$user_total;

            
        }else if($input === 3){
            echo "3. 카드 비교";

            echo "user : ";
            foreach ($draw_ukey as $key => $value) {
                echo $value;
            }
            echo " ".$user_total;

            foreach ($plus_draw_d as $value) {
                $del_plus_val += $value;
            }
            $del_total = $del_val + $del_plus_val;
            echo "dealer : ";
            foreach ($draw_dkey as $key => $value) {
                echo $value;
            }
            echo " ".$del_total;
            if($user_val > 21 || $del_val > 21){
                if($user_val > 21){
                    echo "\n".$user_val."user패";
                }else if($del_val > 21){
                    echo "\n".$del_val."dealer패";
                }
            }else if($user_val === $del_val){
                $user_kard = count($draw_u);
                $del_kard = count($draw_d);
                if($user_kard < $del_kard){
                    echo "\n카드 수 : ".$user_kard."user승";
                }else if($user_kard > $del_kard){
                    echo "\n카드 수 : ".$del_kard." dealer승";
                }
                echo "\n무승부";
            }
        }else if($input === 4){
            echo "현재 카드 합계 초기화(유저, 딜러)";
                $user_val = 0;
                $user_plus_val = 0;
                $del_plus_val = 0;
                $del_val = 0; 
                $draw_u = array();
                $draw_ukey = array();
                $draw_d = array();
                $draw_dkey = array();
                $draw_plus_u = array();
                $plus_draw_d = array();

                // if($user_total === 21){
                //     $draw_plus_u = array();
                // }

        }else if($input > 4){
            for($i=0; $i<=3; $i++){
                if($i === 0){
                    $draw_u1 = array_rand($kard);
                    echo $draw_u1;
                    $draw_u[] = $kard[$draw_u1];
                    $draw_ukey[] = $draw_u1;
                    unset($kard[$draw_u1]);
                }else if($i === 1){
                    $draw_u2 = array_rand($kard);
                    echo $draw_u2;
                    $draw_u[] = $kard[$draw_u2];
                    $draw_ukey[] = $draw_u2;
                    unset($kard[$draw_u2]);
                    
                    foreach ($draw_u as $value) { 
                        $user_val += $value;
                    }
                    // foreach ($draw_plus_u as $value) {
                    //     $user_val == $value;
                    // }
                }else if($i === 2){
                    $draw_d1 = array_rand($kard);
                    $draw_d[] = $kard[$draw_d1];
                    $draw_dkey[] = $draw_d1;
                    unset($kard[$draw_d1]);
                }else{
                    $draw_d2 = array_rand($kard);
                    $draw_d[] = $kard[$draw_d2]; 
                    $draw_dkey[] = $draw_d2;
                    unset($kard[$draw_d2]);
                    // var_dump($draw_d);
                    
                    foreach ($draw_d as $value) {
                        $del_val += $value;
                    }
                }
            }

                if($user_val === 21 || $del_val === 21){
                    if($user_val === 21){
                        echo "\n".$user_val." user 승";
                        // break;
                    }else if($del_val === 21){
                        echo "\n".$del_val." dealer 승";
                        // break;
                    }else{
                        echo "\n무승부";
                    }
                }else 
                foreach ($draw_dkey as $key => $value) {
                    if($key === "♠A" || $key === "♣A" || $key === "♥A" || $key === "◆A"){
                        echo "1 or 11?";

                    }//else if($key === "♠A" || $key === "♣A" || $key === "♥A" || $key === "◆A"){

                    //}
                }

                
        }
        // echo $input;
        print "\n";
    }
    echo "\n게임 끝!\n";

    // 카드 뽑기
    // for($i=0; $i<=3; $i++){
    //     if($i === 0){
    //         $draw_u1 = array_rand($kard);
    //         // echo $draw_u1;
    //         $draw_uval[] = $kard[$draw_u1];
    //         $draw_ukey[] = $draw_u1;
    //         unset($kard[$draw_u1]);
            
    //     }else if($i === 1){
    //         $draw_u2 = array_rand($kard);
    //         echo $draw_u1." ".$draw_u2;
    //         $draw_uval[] = $kard[$draw_u2];
    //         $draw_ukey[] = $draw_u2;
    //         unset($kard[$draw_u2]);
    //         // var_dump($draw_u);
    //         foreach ($draw_u as $value) { 
    //             $user_val += $value;
    //         }
    //         // echo "\n".$user_val;
    //     }else if($i === 2){
    //         $draw_d1 = array_rand($kard);
    //         $draw_dval[] = $kard[$draw_d1];
    //         $draw_dkey[] = $draw_d1;
    //         unset($kard[$draw_d1]);
    //     }else{
    //         $draw_d2 = array_rand($kard);
    //         echo "\n".$draw_d1." ".$draw_d2;
    //         $draw_dval[] = $kard[$draw_d2]; 
    //         $draw_dkey[] = $draw_d2;
    //         unset($kard[$draw_d2]);
    //         // var_dump($draw_d);
    //         foreach ($draw_d as $value) {
    //             $del_val += $value;
    //         }
    //         // echo "\n".$del_val;
    //     }
    // }

    // var_dump($draw_ukey);

        // 1 ~ 5 유저와 딜러 카드 비교해서 승리
        // if($user_val < $del_val){
        //     echo "\ndealer 승 (점수:$del_val)";
        // }else if($user_val > $del_val){
        //     echo "\nuser 승 (점수:$user_val)";
        // }

        // 점수 합 구하기
        // if($user_val === 21 || $del_val === 21){
        //     if($user_val === 21){
        //         echo "\n".$user_val."점, user 승";
        //     }else if($del_val === 21){
        //         echo "\n".$del_val."점, dealer 승";
        //     }else{
        //         echo "\n무승부";
        //     }
        // }else if($user_val > 21 || $del_val > 21){
        //     if($user_val > 21){
        //         echo "\n".$user_val."점, user승";
        //     }else if($del_val > 21){
        //         echo "\n".$del_val."점, dealer승";
        //     }else if($user_val > 21 && $del_val > 21){
        //         echo "\n".$user_val."점, user패";
        //     }
        // }else if($user_val === $del_val){
        //     $user_kard = count($draw_u);
        //     $del_kard = count($draw_d);
        //     if($user_kard < $del_kard){
        //         echo "\n카드 수 : ".$user_kard.", user승";
        //     }else if($user_kard > $del_kard){
        //         echo "\n카드 수 : ".$del_kard.", dealer승";
        //     }
        //     echo "\n무승부";
        // }

    
        // foreach ($draw_dkey as $key => $value) {
        //     if($key === "♠A" || $key === "♣A" || $key === "♥A" || $key === "◆A"){
                
        //     }else if($key === "♠A" || $key === "♣A" || $key === "♥A" || $key === "◆A"){

        //     }
        // }
    
    
?>