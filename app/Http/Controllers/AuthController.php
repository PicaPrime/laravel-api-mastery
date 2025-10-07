<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use ApiResponse;

    public function login(){

        // dd('yes working');
        return $this->ok("hello sending json using trait and controller");
    }
}
