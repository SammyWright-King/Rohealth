<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EmployerController extends Controller
{
    /**
     * register employer
     */
    function register(Request $req){
        $validate = Validator::make($req->all(), [
           'first_name' => "required|string",
           "last_name" => "required|string",
           "email" => "required|email",
           "password" => "required|string",
           "company" => "required|string"
        ]);
        $employer=NULL;

        //validate
        if(!$validate->fails()){
            //get all input
            $employer = User::create([
               'email' => $req->email,
               'password' => bcrypt($req->password),
                'first_name' => $req->first_name,
                'last_name' => $req->last_name,
                'mobile' => $req->mobile,
                'status' => TRUE
            ]);
            //save company
            $company = new Company;
            $company->company_name = $req->company;
            $company->mobile = $req->mobile;
            $company->save();

            //go back to update user
            $employer->company = $company->id;
            $employer->save();

            $employer->companies()->attach($company->id);

            $sta = $this->statusSuccess;
            $msg = "Employer Successfully Added";
        }else{
            $sta = $this->statusErrorReadingResource;
            $msg = "Check Parameters";
        }
        return $this->send($sta, $msg, $employer);
    }

    /**
     * login employer
     */
    function login(Request $req){

        $validate = Validator::make($req->only("email", "password"),
            [
                "email" => "required|email",
                "password" => "required|string"
            ]
        );

        $entity = NULL;

        if(!$validate->fails()){
            $data = $this->getInputData();
            $credentials = ["email"=>$data->email, "password"=>$data->password];
//
            if($this->checkEmail($data->email)){

                if(Auth::attempt($credentials)){
                    $sta = $this->statusSuccess;
                    $msg = "User Authenticated";
                    $entity = Auth::user();
                }else{
                    $sta = $this->statusErrorReadingResource;
                    $msg = "Wrong Password";
                }
            }else{
                $sta = $this->statusRecordDoesNotExist;
                $msg = "Email not Found";
            }

        }else{
            $sta = $this->statusErrorReadingResource;
            $msg = "Check Parameters";
        }
        return $this->send($sta, $msg, $entity);
    }

    /**
     * invite staff
     */
    function inviteStaff(Request $req){
        $validate = Validator::make($req->all(),[
            'email'=> 'required|string',
            'name' => 'required|string',
            'budget' => 'required|numeric'
        ]);
        if(!$validate->fails()){
            $user = Auth::user();

            //generate random number
            $code = $this->randomChar(6);

            //save to db
            $staff = Staff::create([
                'company' => $user['company'],
                'email' => $req->email,
                'first' => $req->first_name,
                'token' => $code,
                'budget' => $req->budget
            ]);

            $sta = $this->statusSuccess;
            $msg = "Staff Has Been Invited";

        }else{
            $sta = $this->statusErrorReadingResource;
            $msg = "Check Parameters";
        }
        return $this->send($sta, $msg);
    }

    /**
     * check if email exists
     */
    function checkEmail($email){
//        $user = User::whereEmail($email)->first();
        if(User::whereEmail($email)->exists()){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
