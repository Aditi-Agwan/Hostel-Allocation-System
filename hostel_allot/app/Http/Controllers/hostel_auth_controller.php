<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hostel_auth_controller extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function signup(){
        return view("auth.signup");
    }
}
