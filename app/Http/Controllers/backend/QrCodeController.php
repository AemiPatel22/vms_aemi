<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Config;

class QrCodeController extends Controller
{
    public function index()
    {
        $data = [];


        $data['title'] = 'PDF Data || '.Config::get('constants.PROJECT_NAME');
        $data['keywords'] = 'PDF Data || '.Config::get('constants.PROJECT_NAME');
        $data['description'] = 'PDF Data || '.Config::get('constants.PROJECT_NAME');
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
                'QR Code' => 'qrcode',
            )
        );



        return view('backend.pages.qrcode.qrcode',$data);


    }
}
