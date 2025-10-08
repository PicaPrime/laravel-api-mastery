<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Requests\api\v1\ApiLoginRequest;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\LoginUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponse;

    public function login(LoginUserRequest $request){

        $validated = $request->validated();

        if(!Auth::attempt($validated)){
            return $this->error('Invalid Credentials', 401);
        }

        $user = User::firstWhere('email', $validated['email']);

        return $this->ok("Authenticated", [
            'token' => $user->createToken('API Token for ' . $user->email)->plainTextToken
        ]);
    }


    public function registration(Request $request){
        return $this->ok("registration", []);
    }
}
