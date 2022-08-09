<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ImportData;
use App\Imports\DataImport;
use Config;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function importForm (){
         // print_r('export data page..');
        // die();
        $data = [];

        $data['title'] = 'Import Data || '.Config::get('constants.PROJECT_NAME');
        $data['keywords'] = 'Import Data || '.Config::get('constants.PROJECT_NAME');
        $data['description'] = 'Import Data || '.Config::get('constants.PROJECT_NAME');
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

        $objimportdata = new Importdata();
        $data['import_data_list'] = $objimportdata -> get_data();

        $data['header'] = array(
            'title' => 'Dashboard',
            'breadcrumb' => array(
                'Dashboard' => route('dashboard'),
                'import-data' => 'import-data',
            )
        );
        return view('backend.pages.import-data.import-data',$data);
    }

    public function import(Request $request){
        Excel::import(new DataImport,$request->file);
        return"Record are imported successfully..!!!";
    }

}
