<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiLoginRequest;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use ApiResponse;

    public function login(ApiLoginRequest $request){

        return $this->ok($request['email']);
        // dd('yes working');
        // return $this->ok("hello sending json using trait and controller");
    }


    public function registration(Request $request){
        return $this->ok("registration");
    }
}
