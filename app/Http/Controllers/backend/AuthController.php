<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index(){

         return view('backend.pages.login.auth-login');

    }

    public function ragister1(){
        return view('backend.pages.ragistration.auth-ragister');
    }
}
