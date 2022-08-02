<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documententry;
use Config;

class DocumententryController extends Controller
{
    public function doc_entry(){
        $data = [];

            $data['title'] = 'Document Entry || '.Config::get('constants.PROJECT_NAME');
            $data['keywords'] = 'Document Entry || '.Config::get('constants.PROJECT_NAME');
            $data['description'] = 'Document Entry || '.Config::get('constants.PROJECT_NAME');
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
            $objDocumententry = new Documententry();
        $data['document_list'] = $objDocumententry -> get_details();


            $data['header'] = array(
                'title' => 'Dashboard',
                'breadcrumb' => array(
                    'Dashboard' => route('dashboard'),
                    'Document Entry' => 'doc-entry',
                )
            );
            return view('backend.pages.documententry.documententry',$data);
       }

    //    public function add_doctype(){


    //    }
}
