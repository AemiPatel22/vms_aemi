<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;

class CategoryController extends Controller
{

    public function category(){
         // print_r('deshboard page..');
        // die();
        $data = [];

        $data['title'] = 'Category || '.Config::get('constants.PROJECT_NAME');
        $data['keywords'] = 'Category || '.Config::get('constants.PROJECT_NAME');
        $data['description'] = 'Category || '.Config::get('constants.PROJECT_NAME');
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
                'Dashboard' => route('dashboard'),
                'Category' => 'category',
            )
        );
        return view('backend.pages.category.category',$data);
    }
}


