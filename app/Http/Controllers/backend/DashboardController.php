<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;


class DashboardController extends Controller
{
    public function dashboard(){
        // print_r('deshboard page..');
        // die();
        $data = [];

        $data['title'] = 'My Dashboard || '.Config::get('constants.PROJECT_NAME');
        $data['keywords'] = 'My Dashboard || '.Config::get('constants.PROJECT_NAME');
        $data['description'] = 'My Dashboard || '.Config::get('constants.PROJECT_NAME');
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
            'title' => 'Dashboard',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
            )
        );
        return view('backend.pages.dashboard.dashboard',$data);
    }
}
