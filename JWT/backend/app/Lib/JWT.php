<?php 
namespace App\Lib;

use Exception;
use Illuminate\Support\Facades\Log;
use Throwable;

class JWT {
    // alg 멤버변수 선언
    protected $alg = 'SHA256';
    protected $secret_key = 'php506';

    // 에러 메세지(보통은 설정 파일에 작성)
    protected $error_base = [
        "E01" => "Not set Token"
        ,"E02" => "Unknown form Token"
        ,"E03" => "Unauthorization Token"
        ,"E04" => "Expirted Token"
        ,"E05" => "System Error"
    ];

    // JWT 생성 메소드
    public function createJWT(Array $data) {
        Log::debug('--- create JWT start ---');

        // header 작성 
        // header : 토큰의 기본 정보를 담는 곳
        $header_json = json_encode([
            'alg' => $this->alg,
            'typ' => 'JWT'
        ]);
        $header = base64_encode($header_json);
        Log::debug('header : '.$header);

        // payload 작성
        // payload : 토큰에 담을 정보
        $iat = time(); // 1970 ~ 현재까지의 시간 계산 값, 발급 시간
        $exp = $iat + 60;  // 만료시간
        $payload_json = json_encode([
            'id' => $data['id'],
            'iat' => $iat,
            'exp' => $exp
        ]);
        $payload = base64_encode($payload_json);
        Log::debug('payload : '.$payload);

        // signature 작성
        // signature : 서명, 
        $signature = hash($this->alg, $header.$payload.$this->secret_key);
        Log::debug('signature : '.$signature);

        Log::debug('--- create jwt end ---');
        Log::debug($header.".".$payload.".".$signature);
        return base64_encode($header.".".$payload.".".$signature);
    }

    public function chktoken($token) {
        // try - catch - finally
        Log::debug('--- checktoken ---');
        Log::debug($token);

        // 토근 디코딩
        $decode_token = base64_decode($token);
        
        try {
            // 토큰 분리
            $arr_token = explode(".", $decode_token); 
            Log::debug("arr_token : ", $arr_token);

            // 토큰 유무 체크 / 토큰 형태 체크
            if( count($arr_token) !== 3 ) { // token이 3개로 분할 (header, payload, signature)
                throw new Exception("E02");
            }

            $header = $arr_token[0];
            $payload = $arr_token[1];
            $signature = $arr_token[2];

            // 토큰 유효기간 확인
            $arr_payload = json_decode(base64_decode($payload));
            if(time() > $arr_payload->exp){
                throw new Throwable('E04');
            }
            // 검증용 signature 생성
            $verify = hash($this->alg, $header.$payload.$this->secret_key);
            Log::debug('verify'.$verify);
            if($signature !== $verify){
                Log::debug('--- != signature ---');
                throw new Throwable('E03');
            }
            return true;
        } catch (Throwable $th) { 
            // throwable 7. 버전부터 사용 가능
            // Exception -> 치명적인 에러만 잡음
            // Throwable -> 자잘한 에러도 잡아줌

            return $this->create_error_info($th->getMessage());
        } finally {
            Log::debug('--- == signature ---');
        }
        return "";
    }

    /*
    메소드명 : create_error_info 
    기능     : 에러 정보 배열 작성
    파라미터 : string $error_code
    리턴     : Array  $error_info 
    */
    public function create_error_info($error_code) {
        // 에외 코드 확인
        $code = array_key_exists( $error_code->getMessage(), $this->error_base ) ? $error_code->getMessage() : "E99";

        $error_info = [
            "code" => $error_code->getMessage()
            ,"msg" => $this->error_base[$error_code->getMessage()]
        ];

        Log::debug("Error : ".$code);
    }
}
?>