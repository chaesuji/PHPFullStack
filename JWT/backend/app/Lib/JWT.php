<?php 
namespace App\Lib;

use Illuminate\Support\Facades\Log;
use Throwable;

class JWT {
    // alg 멤버변수 선언
    protected $alg = 'SHA256';
    protected $secret_key = 'php506';

    // JWT 생성 메소드
    public function createJWT(Array $data) {
        Log::debug('--- create JWT start ---');

        // header 작성
        $header_json = json_encode([
            'alg' => $this->alg,
            'typ' => 'JWT'
        ]);
        $header = base64_encode($header_json);
        Log::debug('header : '.$header);

        // payload 작성
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
        $signature = hash($this->alg, $header.$payload.$this->secret_key);
        Log::debug('signature : '.$signature);

        Log::debug('--- create jwt end ---');
        return $header.".".$payload.".".$signature;
    }

    public function chktoken($token) {
        // try - catch - finally
        Log::debug('--- checktoken ---');
        Log::debug($token);
        try {
            // 토큰 분리
            $arr_token = explode(".", $token); 

            $header = $arr_token[0];
            $payload = $arr_token[1];
            $signature = $arr_token[2];

            // 토큰 유효기간 확인
            $arr_payload = json_decode(base64_decode($payload));
            if(time() > $arr_payload->exp){
                throw new Throwable('유효시간 초과');
            }

            // 검증용 signature 생성
            $verify = hash($this->alg, $header.$payload.$this->secret_key);
            Log::debug('verify'.$verify);
            if($signature !== $verify){
                Log::debug('--- != signature ---');
                throw new Throwable('!= signature');
            }

            return true;
        } catch (Throwable $th) { 
            // throwable 7. 버전부터 사용 가능
            // Exception -> 치명적인 에러만 잡음
            // Throwable -> 자잘한 에러도 잡아줌

            Log::debug($th->getMessage());
            return false;
        } finally {
            Log::debug('--- == signature ---');
        }
    }
}
?>