<?php
    // while + if
    $i = 0;
    while ($i <= 4) {
        if($i === 1){
            // echo "1입니다.";
        }else if($i === 4){
            // echo "4입니다.";
        }
        $i++;
    }

    // foreach + if
    $arr_ass = ["a"=>1, "b"=>2, "c"=>3, "d"=>4];
    foreach ($arr_ass as $key => $value) {
        if($key === "c" || $value === 2){
            // echo "if\n";
        }
    }

    // 이중루프
    for($i=2; $i<=9; $i++){
        // echo "$i 단\n";
        for($z=1; $z<=9; $z++){
            // echo "$i * $z = ".$i*$z."\n";
        }
    }

    // 1~100까지의 숫자 중에 짝수의 합
    $z=0;
    for($i=1; $i<=100; $i++){
        if($i % 2 === 0){
            $z += $i;
        }
    }
    // echo $z;

    $arr_test = array(
                        1,
                        2,
                        array(
                            "info_a"=>3,
                            "info_b"=>4,
                            "info_arr"=>
                                array(
                                    "f_1"=>5,
                                    "f_2"=>7
                                )
                        )
                    );
    // echo $arr_test["info"]["info_a"];
    // echo "\n".$arr_test["info"]["info_arr"]["f_2"];
    // echo $arr_test[2]["info_arr"]["f_1"];

    // 함수명 : fnc_sum
    // 파라미터 : int $param_a, int $param_b
    // 리턴 값 : int $sum
    // 기능 : 파라미터를 더한 값을 리턴

    function fnc_sum($param_a, $param_b){
        $sum = $param_a + $param_b;
        return $sum;
    }
    // echo fnc_sum(5,10);

    // 가변 파라미터
    function fnc_sum2(...$param_numbers){
        // $sum = 0;
        // foreach ($param_numbers as $value) {
        //     $sum += $value;
        // }
        // return $sum;
        return array_sum($param_numbers);
    }
    // echo fnc_sum2(3,4,5,6);

    function fnc_global(){
        global $global_i;
        static $static_i = 0;
        $global_i = 0;

    }
    $global_i = 5;
    // fnc_global();
    
    // echo $global_i;

    function fnc_static(){
        static $static_i = 0;
        echo $static_i;
        $static_i++;
    }
    // fnc_static();

    function fnc_reference( &$param_str){
        $param_str = "fnc_reference";
    }
    // $str = "aaa";
    // fnc_reference( $str );
    // echo $str;

    // function gugudan($param_dan){
    //     for ($num=1; $num<=9; $num++) { 
    //         $result = "$param_dan * $num = ".$param_dan*$num;
    //     }
    //     return $result;
    // }
    // echo gugudan(2);

/*******************************
파일명 : 
시스템명 :
이력
    v001(수정사항 이력명) : new - d1111(사번)
    v002 : fnc_print_str 수정 - d1111(사번)
*********************************/

    // function fnc_print_star($print_n){ // fnc_print_star del
    // function fnc_print_str($print_n, $str_1){ // fnc_print_str add
    function fnc_print_str($print_n, $str_1 = "*"){ // 파라미터가 없을 경우 *로 출력(첫 번째 파라미터의 값이 있을 경우)
        // for ($i=1; $i<=$print_n; $i++) { 
        for ($i=1; $i<=$print_n; $i++) { 
            // echo "*"; // fnc_print_star del
            echo $str_1; // fnc_print_str add
        }
        echo "\n";
    }  
    
    // fnc_print_star(1);
    // fnc_print_star(2);
    // fnc_print_star(3);
    // fnc_print_star(4);
    // fnc_print_star(5);

    // 위 함수를 내가 원하는 문자로 찍고 싶다는 요청이 왔습니다.
    fnc_print_str(1, "¯\_(ツ)_/¯");
    fnc_print_str(2, "(^///^)");
    fnc_print_str(3, "(T_T)");
    fnc_print_str(4, "(¬‿¬)");
    fnc_print_str(5, "(●'◡'●)");

    function fnc_reference_1(&$param_str){
        echo "2번 : $param_str \n";
        $param_str = "fnc_reference2에서 값 변경";
        echo "3번 : $param_str \n";
    }
    // $str = "aaa";
    // echo "1번 : $str \n";
    // fnc_reference_1( $str );
    // echo "4번 : $str \n"; // 주소값

// ----------class------------
class Food {
    // 멤버변수 (=변수 ) 
    // 접근 제어 지시자 : public(어디서든(class 밖에서도) 접근 가능), private(해당 클래스 내에서만 접근 가능), protected(해당 클래스와 해당 클래스를 상속받은 클래스 내에서만 접근 가능)
    // private $str_name;
    // private $int_price;
    protected $str_name;
    protected $int_price;
    // 메소드 (=함수 ) / __construnc() : 생성자
    public function __construct( $param_name, $param_price ){
        $this->str_name = $param_name;
        $this->int_price = $param_price;
    }

    public function fnc_print_food(){
    // public function fnc_print_food( $param_price ){
        $str = $this->str_name. " : ". $this->int_price. " 원";
        echo $str;
    //     $this->int_price = $param_price;
    //     $str = $this->str_name. " : ". $this->int_price. " 원";
    //     echo $str;
    }
}

$obj_food = new Food("탕수육", 10000);
// $obj_food->str_name;
// $obj_food->fnc_print_food();

// 멤버변수 $int_price의 값을 12000으로 바꾸어 주세요.
// $obj_food->fnc_print_food(8000);

// 상속(extends) : 부모 클래스의 객체들을 자식 클래스가 상속받아 사용할 수 있다
class KoreanFood extends Food { // 자식 클래스 생성 후 extends Food(상속받을 부모 클래스)
    protected $side_dish;

    public function __construct( $param_name, $param_price, $param_side_dish ){
        $this->str_name = $param_name;
        $this->int_price = $param_price;
        $this->side_dish = $param_side_dish;
    }
    // 오버라이딩 : 부모 클래스에서 정의된 메소드를 자식 클래스에서 재정의
    public function fnc_print_food(){
        // $str = $this->str_name. " : ". $this->int_price. " 원\n"."반찬 : ". $this->side_dish."\n";
        parent::fnc_print_food();
        $str = "\n"."반찬 : ".$this->side_dish."\n";
        echo $str;
    }
}
$obj_korean_food = new KoreanFood("치킨", 20000, "치킨무");
$obj_korean_food->fnc_print_food();

class People{
    protected $name;
    public function setname( $param_name ){
        $this->name = $param_name;
    }
    // public function peoplePrint(){  
    //     echo $this->$print_name;
    // }
    // public function __construct( $param_name ){
    //     $this->name = $param_name;
    // }
    public function peoplePrint(){
        $str = "이름 : ".$this->name;
        echo $str;
    }
}

class Student extends People{
    protected $id;
    public function setid( $param_id ){
        // $this->name = $param_name;
        $this->id = $param_id;
    }
    // public function __construct( $param_name, $param_id ){
    //     $this->name = $param_name;
    //     $this->id = $param_id;
    // }
    public function studentPrint(){
        parent::peoplePrint();
        $str = "아이디 : ".$this->id;
        echo "\n".$str;
    }
} 
$obj_student = new Student("abc", "1");
$obj_student->studentPrint();
echo "\n";
$obj_student->setname("aaa");
$obj_student->setid("2");
$obj_student->studentPrint();
?>