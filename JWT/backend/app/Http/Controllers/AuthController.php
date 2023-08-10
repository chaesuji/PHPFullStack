<?php

namespace App\Http\Controllers;

use App\Lib\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    protected $obj_jwt;
    public function __construct()
    {
        $this->obj_jwt = new JWT();
    }
    // JWT 토큰 생성
    function issuetoken(Request $req) {
        Log::debug("--- issuetoken start --- ");
        Log::debug("id : ", $req->only('id'));
        // todo 유효성 체크, DB에서 유저 검색

        // JWT 생성
        $token = $this->obj_jwt->createJWT($req->only('id'));

        Log::debug("--- issuetoken end ---");

        $res = [
            'errflg' => '0',
            'token' => $token
        ];
        return response(json_encode($res), 200);
    }

    // 토큰 검증용
    public function chk(Request $req) {
        $token = $req->header('Authorization');

        $res = [
            'errflg' => '0',
            'msg' => 'OK'
        ];
        $status = 200;
        $result = $this->obj_jwt->chktoken($token);

        if( is_array($result) ) {
            $res = [
                'errflg' => '1',
                'error_info' => [
                    'code' => $result["code"],
                    'msg' => $result["msg"]
                ]
            ];
            $status = 401;
        }

        return response(json_encode($res), 200);
    }
}
