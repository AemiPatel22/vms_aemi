<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;

class RagistrationController extends Controller
{

    public function register(){
        $data = [];

        $data['title'] = 'Ragistration Page || '.Config::get('constants.PROJECT_NAME');
        $data['keywords'] = 'Ragistration Page || '.Config::get('constants.PROJECT_NAME');
        $data['description'] = 'Ragistration Page || '.Config::get('constants.PROJECT_NAME');
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


                'Ragister' => 'register',

        );
        return view('backend.pages.ragistration.ragistration',$data);
    }
}
