<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PDFData;
use Config;
use PDF;

class PDFController extends Controller
{

    public function get_details(){
        $data = PDFData::all();


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
        $objpdfdata = new PDFData();
        $data['pdf_data_list'] = $objpdfdata -> get_details();

        $data['header'] = array(
            'title' => 'Dashboard',
            'breadcrumb' => array(
                'Dashboard' => route('dashboard'),
                'PDF Data' => 'pdfdata',
            )
        );



        return view('backend.pages.pdf_data.pdf_data',$data);
    }

    public function download_pdf(){
        $data['pdf_data'] = PDFData::all();
        $pdf = PDF::loadView('backend.pages.pdf_data.pdf',$data);
        return $pdf->download('user.pdf');
    }

}
