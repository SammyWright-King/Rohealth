<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
//use Tymon\JWTAuth\JWT;
use JWTAuth;

class StaffController extends Controller
{
    /**
     * login staff
     */
    function login(Request $request){
        $validate = Validator::make($request->only('email', 'password'), [
            'email' => 'email',
            'pin' => 'numeric'
        ]);
        if(!$validate->fails()){
//            $staff = new staff();
//            $staff->getByEmail($request->email);
//            if($staff->exists){
//                return $this->authenticate($request->all());
//            }else{
//                return response()->json(['message' => "User not found"]);
//            }
            if($token = JWTAuth::attempt(['email' => $request->email, 'pin'=> $request->pin])){
                echo $token;
            }else{
                echo "no token";
            }
        }else{
            return response()->json(["message"=> "Checck request parameters"]);
        }

    }

    /**
     * verigy staff
     */
    function verify($code){
        $user = new Staff();
        $user = $user->getByCode($code);
        return $user;
    }
    /**
     * register staff
     */
    function register(Request $req){
        $validate = Validator::make($req->all(), [
            'first_name'=> 'required|string',
            'last_name' => 'required|string',
            'mobile' => 'string',
            'pin' => 'required|min:4|numeric'
        ]);

        if(!$validate->fails()){
            //update table
            $code = $_GET['code'];

            $user = $this->verify($code);

            if($user->exists){
                $staff = Staff::find($user->id);
                $staff->first_name = $req->first_name;
                $staff->last_name = $req->last_name;
                $staff->mobile = $req->mobile;
                $staff->pin = bcrypt($req->pin);
                $staff->update();

                $token = JWTAuth::fromuser($staff);

                return response()->json(compact('staff', 'token'));
            }else{
                return response()->json(['message'=>"Code could not be Verified"]);
            }
        }else{
            return response()->json(['error' => "Check Parameters"]);
        }
    }
    /**
     * add beneficiaries
     */
    function addBeneficiary(){

    }
    /**
     * show beneficiaries
     */
    function showBeneficiaries(){

    }

    /**
     * authenticate
     */
    function authenticate(array $credentials){
        try{
            if(!$token = JWTAuth::attemp($credentials)){
                return response()->json(['error'=>"Invalid Credentials"], 400);
            }
        }catch(JWTException $e){
            return response()->json(['error'=> "could not create Token"], 500);
        }
        return response()->json(compact($token));
    }
}
