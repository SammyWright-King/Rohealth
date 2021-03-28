<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $statusSuccess = 100;
    protected $statusErrorReadingResource = 102;
    protected $statusInvalidCredentials = 104;
    protected $statusAccountExists = 105;
    protected $statusInvalidSession = 106;
    protected $statusAccountNotVerified = 107;
    protected $statusMobileNotVerified = 108;
    protected $statusInvalidFileType = 109;
    protected $statusUnAuthorizedAction = 110;
    protected $statusPaystackValidationError = 111;
    protected $statusRecordExists = 112;
    protected $statusRecordDoesNotExist = 113;
    protected $statusRecordEmpty = 114;
    protected $statusServerError = 115;

    /**
     * @param $sta
     * @param $msg
     * @param null $entity
     * @return \Illuminate\Http\JsonResponse
     * send response back
     */
    public function send($sta, $msg, $entity=NULL){
        $response = [
           'status' => $sta,
           'message' => $msg
        ];
        if(isset($entity)){
            $response['entity'] = $entity;
        }

        return response()->json($response);
    }

    /**
     * @return mixed
     */
    public function getInputData(){
        $json = file_get_contents('php://input');
        $obj = json_decode($json);

        return $obj;
    }

    /**
     * @param int $length
     * @return string
     * generate random number
     */
    function randomNumber($length = 50) {
        $characters = '0123456789';
        $string = '';

        for ($p = 0; $p < $length; $p++) {
            $string .= $characters[mt_rand(0, strlen($characters))];
        }

        return $string;
    }

    /**
     * @param int $length
     * @return string
     * generate random characters
     */
    function randomChar($length = 50) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWZYZ0123456789';
        $string = '';

        for ($p = 0; $p < $length; $p++) {
            $string .= $characters[mt_rand(0, strlen($characters))];
        }

        return $string;
    }

    function genrateVerCode($length = 50) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWZYZ123456789';
        $string = '';

        for ($p = 0; $p < $length; $p++) {
            $string .= $characters[mt_rand(0, strlen($characters))];
        }

        return $string;
    }
}
