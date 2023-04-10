<?php
    $kard = array( // 카드덱 배열
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
    $draw_plus_u = " "; // 추가 카드 값(string) 저장용 변수
    $plus_draw_d = " ";
    $draw_u = []; // 점수(int) 저장용 배열
    $draw_d = [];
    $plus_draw = []; // 추가 카드  점수(int) 저장용 배열 
    $user_plus_val = 0;
    $user_val = 0; // 점수 합계 저장용 변수
    $del_val = 0;
    function clear_value($str_message){
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

        return $str_message;
    }
    
        echo '게임시작';
        print "\n";
    while(true) {
        echo '1 : 카드 더 받기 | 2 : 현재 카드, 카드의 합 보기 | 3 : 카드 비교하기 | 4 : 현재 카드의 합계 초기화 하기 | 5 ~ : 게임시작';
        print "\n";
        fscanf(STDIN, "%d\n", $input);  
        if($input === 0) {
            break;
        }else if($input === 1){
            echo "1. 카드 더 받기";
            $plus_draw_u = array_rand($kard);
            echo "\n추가 카드 : ".$plus_draw_u;
            $draw_u[] = $kard[$plus_draw_u];
            foreach ($draw_u as $value) {
                $user_val += $value;
            }
            foreach ($draw_d as $value) {
                $del_val += $value;
            }
            if(strstr($plus_draw_u, 'A')){
                if($user_val > 11){
                    $user_val -= 10;
                }
            }
            
            // echo $user_val;
            if($user_val === 21){
                echo "\n".$user_val." : 유저 이김"; 
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
                // echo clear_value("값 초기화");
                
            }else if($user_val > 21){
                echo "\n".$user_val." : 유저 짐";
                // break;
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
            }else if($del_val === 21){
                echo "\n".$del_val." : 딜러 이김";
                // break;
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
            }else if($del_val > 21){
                echo "\n".$del_val." : 딜러 짐";
                // break;
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
            }
            
            $draw_ukey[] = $plus_draw_u;
            unset($kard[$plus_draw_u]);
            if($del_val < 17){
                $plus_draw_d = array_rand($kard);
                $draw_d[] = $kard[$plus_draw_d];
                $draw_dkey[] = $plus_draw_d;
                unset($kard[$plus_draw_d]);
                // var_dump($draw_d);
            }

        }else if($input === 2){
            echo "2. 현재 카드의 합 보기\n";
            echo "현재 카드 : ";
            foreach ($draw_ukey as $key => $value) {
                echo $value.", ";
            }
            echo "| 점수의 합 : ".$user_val;

        }else if($input === 3){
            echo "3. 카드 비교\n";
            echo "user : ";
            foreach ($draw_ukey as $key => $value) {
                echo $value.", ";
            }
            echo $user_val;
            echo " | dealer : ";
            foreach ($draw_dkey as $key => $value) {
                echo $value.", ";
            }
            echo $del_val;
            if($del_val >= 21 || $user_val >= 21){
                if($user_val === 21){
                    echo "\n 유저 이김";
                }else{
                    echo "\n 유저 짐";
                }
            }else if($del_val === $user_val){
                $del_kard = count($draw_dkey);
                $use_kard = count($draw_ukey);
                if($del_kard < $use_kard){
                    echo "\n 딜러 이김";
                }else if($del_kard > $use_kard){
                    echo "\n 유저 이김";
                }else if($del_kard === $use_kard){
                    echo "\n 무승부";
                }
            }else if($del_val > 21 && $user_val > 21){ // 딜러와 유저 모두 21을 넘지 않을 때
                $del_min = $del_val - 21;
                $user_min = $user_val - 21;
                echo $user_min < $del_min ? "\n 딜러 이김" : "\n 유저 이김";
            }else if($del_val > 21 && $user_val > 21){ // 유저와 딜러 모두 21을 넘을 때
                $del_max = $del_val - 21;
                $user_max = $user_val - 21;
                echo $user_max < $del_max ? "\n 유저 이김" : "\n 딜러 이김";
            }else if($del_val === 21 || $user_val === 21){
                if($del_val === 21){
                    echo "\n 딜러 이김";
                }else{
                    echo "\n 딜러 짐";
                }
            }
        }else if($input === 4){
            echo "현재 카드, 합계 초기화(유저, 딜러)";
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

        }else if($input > 4){
            for($i=0; $i<=3; $i++){
                if($i === 0){
                    $draw_u1 = array_rand($kard);
                    echo $draw_u1;
                    $draw_u[] = $kard[$draw_u1];
                    if($user_val === 21){
                        echo "\n".$user_val." : 유저 이김"; 
                        break;
                    }else if($user_val > 21){
                        echo "\n".$user_val." : 유저 짐";
                        break;
                    }
                    $draw_ukey[] = $draw_u1;
                    unset($kard[$draw_u1]);
                }else if($i === 1){
                    $draw_u2 = array_rand($kard);
                    echo $draw_u2;
                    $draw_u[] = $kard[$draw_u2];
                    $draw_ukey[] = $draw_u2;
                    unset($kard[$draw_u2]);
                }else if($i === 2){
                    $draw_d1 = array_rand($kard);
                    $draw_d[] = $kard[$draw_d1];
                    $draw_dkey[] = $draw_d1;
                    unset($kard[$draw_d1]);
                }else if($i === 3){
                    $draw_d2 = array_rand($kard);
                    $draw_d[] = $kard[$draw_d2]; 
                    if($del_val === 21){
                        echo "\n".$del_val." : 딜러 이김";
                        break;
                    }else if($del_val > 21){
                        echo "\n".$del_val." : 딜러 짐";
                        break;
                    }
                    $draw_dkey[] = $draw_d2;
                    unset($kard[$draw_d2]);
                }
            }
        }

        print "\n";
    }
    echo "\n게임 끝!\n";

        // 1 ~ 5 유저와 딜러 카드 비교해서 승리
        // if($user_val < $del_val){
        //     echo "\ndealer 승 (점수:$del_val)";
        // }else if($user_val > $del_val){
        //     echo "\nuser 승 (점수:$user_val)";
        // }
?>