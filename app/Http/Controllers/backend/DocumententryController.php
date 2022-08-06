<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documententry;
use App\Models\Documentfor;
use App\Models\Documentof;
use App\Models\Documenttype;
use App\Models\Doctype;
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
                'css/select2.min.css'
            );
            $data['pluginjs'] = array(
            );
            $data['js'] = array(
                'doc_entry.js',
                'document.js'
            );
            $data['funinit'] = array(
                'Docentry.init()'
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

   public function add_docentry(){
    $data = [];

        $data['title'] = 'Add Document Entry || '.Config::get('constants.PROJECT_NAME');
        $data['keywords'] = 'Add Document Entry || '.Config::get('constants.PROJECT_NAME');
        $data['description'] = 'Add Document Entry || '.Config::get('constants.PROJECT_NAME');
        $data['css'] = array(
                'error.css'
        );
        $data['plugincss'] = array(
            'css/select2.min.css'
        );
        $data['pluginjs'] = array(
            'select2.min.js'
        );
        $data['js'] = array(
            'comman_function.js',
            'documenttype.js',
            'doc_entry.js',
            'document.js'

        );
        $data['funinit'] = array(
            'Documenttype.init()'
        );

        $objDocumentfor = new Documentfor();
        $data['document_for'] = $objDocumentfor ->get_docfor_list();


        $data['header'] = array(
            'title' => 'Dashboard',
            'breadcrumb' => array(
                'Dashboard' => route('dashboard'),
                'Document Entry' => route('doc-entry'),
                'Add Document Entry' => 'add-docentry'
            )
        );
        return view('backend.pages.documententry.add-documententry',$data);

      }

      public function save_docentry(Request $request){
        $objDocumententry = new Documententry();
         $res = $objDocumententry->add_docentry($request->all());
        if($res == 'true'){
            return redirect('doc-entry')->with('success','document entry successfully added..!!');
        }
        else{
            if($res == 'doc_exits'){
                return redirect('add-docentry')->with('warning','document entry is already exists');
            }
            else{
                return redirect('add-docentry')->with('error','Something goes to wrong');
            }
        }

      }

      public function action_document(Request $request){
        $action = $request->input('action');

        switch ($action) {
            case 'action-employee':
                $objDocumententry = new Documententry();
                $res = $objDocumententry->action_document($request->all());
                if($res){
                    echo "true";
                    exit;
                }else{
                    echo "false";
                    exit;
                }

        }
      }

      public function action_docentry(Request $request){
        $action = $request->input('action');

        switch ($action) {
            case 'action-employee':
                $objDocumententry = new Documententry();
                $res = $objDocumententry->action_docentry($request->all());
                if($res){
                    echo "true";
                    exit;
                }else{
                    echo "false";
                    exit;
                }

        }
      }

      public function view_docentry($docID){
        $data = [];

        $data['title'] = 'View Document Entry || '.Config::get('constants.PROJECT_NAME');
        $data['keywords'] = 'View Document Entry || '.Config::get('constants.PROJECT_NAME');
        $data['description'] = 'View Document Entry || '.Config::get('constants.PROJECT_NAME');
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
        $data['document_list'] = $objDocumententry -> view_docentrydetails($docID);

        $data['header'] = array(
            'title' => 'Dashboard',
            'breadcrumb' => array(
                'Dashboard' => route('dashboard'),
                'View Document ' => 'view-docentry',
            )
        );
        return view('backend.pages.documententry.view-documententry',$data);
      }


      public function ajaxcall(Request $request){

        $action = $request->input('action');

        switch ($action) {
            case 'change-doctype':
                $objdocumenttype = new Doctype();
                $res = $objdocumenttype->action_documenttype($request->all());
                // print_r($res);
                // die();
                echo json_encode($res);
                exit();

            case 'change-docof':
                $objdocumentof = new Documentof();
                $res = $objdocumentof->action_documentof($request->all());
                echo json_encode($res);
                exit();



        }
    }
}
