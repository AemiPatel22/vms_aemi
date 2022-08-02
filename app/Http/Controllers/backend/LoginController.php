<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;

class LoginController extends Controller
{

    public function login(){
        $data = [];

        $data['title'] = 'Login Page || '.Config::get('constants.PROJECT_NAME');
        $data['keywords'] = 'Login Page || '.Config::get('constants.PROJECT_NAME');
        $data['description'] = 'Login Page || '.Config::get('constants.PROJECT_NAME');
        $data['css'] = array(

        );
        $data['plugincss'] = array(

        );
        $data['pluginjs'] = array(

        );
        $data['js'] = array(

        );
        $data['funinit'] = array(

        );
        $data['header'] = array(


                'Login' => 'login',

        );
        return view('backend.pages.login.login',$data);
    }

}
