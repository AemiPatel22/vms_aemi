<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Models\Exportdata;

class ExportDataConroller extends Controller
{

    public function export_data(){

         // print_r('export data page..');
        // die();
        $data = [];

        $data['title'] = 'Export Data || '.Config::get('constants.PROJECT_NAME');
        $data['keywords'] = 'Export Data || '.Config::get('constants.PROJECT_NAME');
        $data['description'] = 'Export Data || '.Config::get('constants.PROJECT_NAME');
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

        $objexportdata = new Exportdata();
        $data['export_data_list'] = $objexportdata -> get_details();

        $data['header'] = array(
            'title' => 'Dashboard',
            'breadcrumb' => array(
                'Dashboard' => route('dashboard'),
                'export-data' => 'export-data',
            )
        );
        return view('backend.pages.export-data.export-data',$data);
    }

    public function add_export_data(){
        $data = [];

        $data['title'] = 'Add Export Data || '.Config::get('constants.PROJECT_NAME');
        $data['keywords'] = 'Add Export Data || '.Config::get('constants.PROJECT_NAME');
        $data['description'] = 'Add Export Data || '.Config::get('constants.PROJECT_NAME');
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

        $objexportdata = new Exportdata();
        $data['export_data_list'] = $objexportdata -> get_export_details();

        $data['header'] = array(
            'title' => 'Dashboard',
            'breadcrumb' => array(
                'Dashboard' => route('dashboard'),
                'export-data' => route('export-data'),
                'add-export-data' => 'add-export-data',
            )
        );
        return view('backend.pages.export-data.add-export-data',$data);
    }

    public function edit_export_data(){
        $data = [];

        $data['title'] = 'Edit Export Data || '.Config::get('constants.PROJECT_NAME');
        $data['keywords'] = 'Edit Export Data || '.Config::get('constants.PROJECT_NAME');
        $data['description'] = 'Edit Export Data || '.Config::get('constants.PROJECT_NAME');
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
                'export-data' => route('export-data'),
                'edit-export-data' => 'edit-export-data',
            )
        );
        return view('backend.pages.export-data.edit-export-data',$data);
    }



    public function save_export_data(Request $request){
        $objexportdata = new Exportdata();
        $res= $objexportdata -> add_export_data($request->all());

        if($res == 'true'){
            return redirect('export-data')->with('success','file data successfully added..!!');
        }
        else{
            if($res == 'file_exits'){
                return redirect('add-export-data')->with('warning','file data is already exists');
            }
            else{
                return redirect('add-export-data')->with('error','Something goes to wrong');
            }
        }
    }

    public function save_edit_export_data(){

    }

}
