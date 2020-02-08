<?php

namespace App\Http\Controllers\API;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;

class RegisterController extends BaseController
{
    public function register(Request $request){
        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'repassword'=>'required|same:password'
        ]);
        if($validate->fails()){
            return $this->sendError('Validation error',$validate->errors());
        }
        $input=$request->all();
        $input['password']=bcrypt($input['password']);
        $user=User::create($input);
        $success['token']=$user->createToken('MyApp')->accessToken;
        $success['user']=$user->name;
        return $this->sendResponse($success,'User register successfully');
    }
}
