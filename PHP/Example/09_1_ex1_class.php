<?php
    // class : 동종의 객체(=object / 데이터와 함수가 결합되어 있는 것)들이 모여있는 집합
    class Student { // 클래스명 첫글자는 대문자
        // 클래스 멤버 변수
        // 접근제어 지시자 : public, private, protected
        public $std_name; // public : 어디서든 접근 가능
        private $std_id; // private : Student class 내에서만 접근 가능
        protected $std_age; // protected : 상속 class 내에서만 접근 가능

        // class 안에 있는 function을 method라고 부름
        public function print_student($param_std_name, $param_std_age){
            $result_name = "이름 : ".$param_std_name."";
            $result_age = "나이 : ".$param_std_age."세";

            echo $result_name;
            echo "\n";
            echo $result_age;
        }

        // private 객체를 사용할 수 있는 방법
        public function set_std_id($param_id){ // 값을 저장하는 용도
            // this 포인터 : class 자기 자신을 가르키고 있음
            // 파라미터(=매개변수 / $param_id)에서 값을 받아 std_id에 넣어줌
            $this->std_id = $param_id;
        }
        public function get_std_id(){ // 값을 가져오는 용도
            return $this->std_id;
        }
    }

    $obj_student = new Student; // class를 선언(=초기화)
    //$obj_student->print_student("홍길동", 27); // class 안의 method 호출

    // class의 멤버 변수 사용 방법
    echo $obj_student->std_name;
    $obj_student->std_name = "갑돌이"; 
    echo $obj_student->std_name;

    // 지시자가 private이기 때문에 접근 권한이 없다.
    // $obj_student->$std_id = "갑돌이id";

    // getter, setter로 private 객체에 접근
    $obj_student->set_std_id("갑순이id"); // 함수를 한 번 거쳐서 값 넣음
    echo $obj_student->get_std_id();

    class Food {
        private $food_name;

        public function __construct($param_food_name){
            $this->food_name = $param_food_name;
        }
        public function print_food_name(){
            echo $this->food_name;
        }
    }

    $obj_food = new Food("탕수육");
    $obj_food->print_food_name();
?>