<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use phpseclib3\Crypt\PublicKeyLoader;
use phpseclib3\Crypt\RSA;
class PaymentController extends Controller
{
    public function pay(){
        $ussdJson=array(
            "appId"=> "2b7d8d26b5f6482ba041efad399e63ee",
            "nonce"=> strval(rand()),
            "outTradeNo"=> "19423000",
            "receiveName"=> "Dream Technololgy PLC",
            "shortCode"=> "220064",
            "subject"=> "Bus Ticket",
            "timeoutExpress"=> "30",
            "timestamp"=> strval(Carbon::now()->timestamp),
            "totalAmount"=> "1.00"
        );
        $stringA='appId=2b7d8d26b5f6482ba041efad399e63ee
                &appKey=7ed94ce7bc4849a28020bd1eed3a917f
                &nonce='.$ussdJson['nonce'].'
                &outTradeNo=19423000
                &receiveName=Dream Technololgy PLC
                &returnUrl=https://www.nubbus.com
                &shortCode=220064
                &subject=Bus Ticket
                &timeoutExpress=30
                &timestamp='.$ussdJson['timestamp'].'
                &totalAmount=1.00';

        $stringB = strtoupper(hash('sha256', $stringA, $BinaryOutputMode = false));

        $plaintext =json_encode($ussdJson);


        $key = PublicKeyLoader::load('-----BEGIN RSA PUBLIC KEY-----
        MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgpMcNNyHNqRwmvihZ8UUDMtXqdQNZIUAhBTuGsJaGfS2/1bldGmxCh52a/U4UKB5L4JDFoEjpnL/GfbYNXpv3sKld6V0SK7MPcG06Ed7WLZcwJWaYgw29mpmsYTXH2iTOXanCJTb3KqAvC4oJ8BO/8mwbfVp+JjeU/L5/yohWkbdUIMt583SEgG1m6N86MtCrdhhmPhUew52L36wtxbku86bc27k8nhgBoilKJoygNIq1/lUVeuZnBdMl13v2lT/W2T/JQ8ueWVSqlS5IYtVaD4SlYxMHu4xEMv2YBxSQmKF5F4kd8SWCgVrg75WeaaeUxapDOkX132VWKCgJvioiQIDAQAB
        -----END RSA PUBLIC KEY-----');
        $key = $key->withPadding(RSA::ENCRYPTION_PKCS1);
        $ciphertext= base64_encode($key->encrypt($plaintext));

        $message=array(
            'appid' => '2b7d8d26b5f6482ba041efad399e63ee',
            'sign' => $stringB,
            'ussd' =>$ciphertext
        );

        $client = new Client();
        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'charset'=> 'utf-8'
        ];
        $res = $client->request('POST', 'http://196.188.120.3:11443/ammapi/service-openup/toTradeMobilePaywith',[
            [
                'headers' => $headers,
                'json' => $message
            ]
        ]);

        return $res;
    }
}
