<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Models\Documenttype;

class DocumenttypeController extends Controller
{
   public function doc_type(){
    $data = [];

        $data['title'] = 'Document Type || '.Config::get('constants.PROJECT_NAME');
        $data['keywords'] = 'Document Type || '.Config::get('constants.PROJECT_NAME');
        $data['description'] = 'Document Type || '.Config::get('constants.PROJECT_NAME');
        $data['css'] = array(

        );
        $data['plugincss'] = array(
            'css/select2.min.css',
            'plugins/toastr/toastr.min.css'
        );
        $data['pluginjs'] = array(

        );
        $data['js'] = array(
            'documentforselect2.js',
            'documenttype.js'
        );
        $data['funinit'] = array(

        );
        $objDocumenttype = new Documenttype();
        $data['document_list'] = $objDocumenttype -> get_details();

        $data['header'] = array(
            'title' => 'Dashboard',
            'breadcrumb' => array(
                'Dashboard' => route('dashboard'),
                'Document Type' => 'doc-type',
            )
        );
        return view('backend.pages.documenttype.documenttype',$data);
   }

   public function add_doctype(){
    $data = [];

        $data['title'] = 'Add Document Type || '.Config::get('constants.PROJECT_NAME');
        $data['keywords'] = 'Add Document Type || '.Config::get('constants.PROJECT_NAME');
        $data['description'] = 'Add Document Type || '.Config::get('constants.PROJECT_NAME');
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
            'documentforselect2.js',
            'comman_function.js',
            'documenttype.js'
        );
        $data['funinit'] = array(
            'Documenttype.init()'

        );


        $objDocumenttype = new Documenttype();
        $data['document_list'] = $objDocumenttype -> get_documentlist();

        $data['header'] = array(
            'title' => 'Dashboard',
            'breadcrumb' => array(
                'Dashboard' => route('dashboard'),
                'Document Type' => route('doc-type'),
                'Add Document Type' =>'add-doctype',
            )
        );
        return view('backend.pages.documenttype.add-documenttype',$data);
   }

   public function save_doctype(Request $request){
    $objDocumenttype = new Documenttype();
     $res = $objDocumenttype->add_doctype($request->all());
    if($res == 'true'){
        return redirect('doc-type')->with('success','document successfully added..!!');
    }
    else{
        if($res == 'doc_exits'){
            return redirect('add-doctype')->with('warning','document is already exists');
        }
        else{
            return redirect('add-doctype')->with('error','Something goes to wrong');
        }
    }
    // if ($res) {
    //     $return['status'] = 'success';
    //      $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
    //     $return['message'] = 'Adsense users successfully added.';
    //     $return['redirect'] = route('doc-type');
    // } else {

    //     $return['status'] = 'error';
    //     $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
    //     $return['message'] = 'Something goes to wrong';

    // }
    // echo json_encode($return);
    // exit;
   }

 public function view_doctype($docID){
    $data = [];

        $data['title'] = 'View Document Type || '.Config::get('constants.PROJECT_NAME');
        $data['keywords'] = 'View Document Type || '.Config::get('constants.PROJECT_NAME');
        $data['description'] = 'View Document Type || '.Config::get('constants.PROJECT_NAME');
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
        $objDocumenttype = new Documenttype();
        $data['document_list'] = $objDocumenttype -> view_doctypedetails($docID);

        $data['header'] = array(
            'title' => 'Dashboard',
            'breadcrumb' => array(
                'Dashboard' => route('dashboard'),
                'View Document ' => 'view-doctype',
            )
        );
        return view('backend.pages.documenttype.view-documenttype',$data);

 }

        public function action_doctype(Request $request){

            $action = $request->input('action');

            switch ($action) {
                case 'action-employee':
                    $objDocumenttype = new Documenttype();
                    $res = $objDocumenttype -> action_doctype($request->all());
                    if($res){
                        echo "true";
                        exit;
                    }else{
                        echo "false";
                        exit;
                    }

            }
        }

        public function edit_doctype($docID){
            $data = [];

        $data['title'] = 'Edit Document Type || '.Config::get('constants.PROJECT_NAME');
        $data['keywords'] = 'Edit Document Type || '.Config::get('constants.PROJECT_NAME');
        $data['description'] = 'Edit Document Type || '.Config::get('constants.PROJECT_NAME');
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
        $objDocumenttype = new Documenttype();
        $data['document_list'] = $objDocumenttype -> edit_doctypedetails($docID);

        $objDocumenttype = new Documenttype();
        $data['document_listtype'] = $objDocumenttype -> edit_doctype();

        $data['header'] = array(
            'title' => 'Dashboard',
            'breadcrumb' => array(
                'Dashboard' => route('dashboard'),
                'Edit Document ' => 'edit-doctype',
            )
        );
        return view('backend.pages.documenttype.edit-documenttype',$data);
        }

    public function save_edit_doctype(Request $request){
            $objDocumenttype = new Documenttype();
             $res = $objDocumenttype->save_edit_doctype($request->all());
            if($res == 'true'){
                return redirect('doc-type')->with('success','document successfully updated..!!');
            }
         else{
            if($res == 'doc_exits'){
                return redirect()->route('edit-doctype',$request->input('editID'))->with('warning','employee already exists');
              }
            else{
                return redirect()->route('edit-doctype',$request->input('editID'))->with('warning','employee already exists');
             }
            }
        }
}
