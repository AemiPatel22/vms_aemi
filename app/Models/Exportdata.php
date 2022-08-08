<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exportdata extends Model
{
    use HasFactory;

    protected $table = 'export_data';

        public function get_details(){
            return Documenttype::from('export_data')
                            ->select('export_data.first_name','export_data.last_name','export_data.email','export_data.gender',
                             'export_data.phone_number','export_data.description','export_data.id')
                            ->get()
                            ->toArray();
        }

        public function get_export_details(){
         return Documenttype::from('export_data')
                            ->select('export_data.first_name','export_data.last_name','export_data.email','export_data.gender',
                            'export_data.phone_number','export_data.description','export_data.id')
                            ->get()
                            ->toArray();


        }

        public function add_export_data($requestData){

                $objexportdata = new Exportdata();



                $objexportdata->first_name = $requestData['first_name'];
                $objexportdata->last_name = $requestData['last_name'];
                $objexportdata->email = $requestData['email'];
                $objexportdata->gender = $requestData['gender'];
                $objexportdata->phone_number = $requestData['phone_number'];
                $objexportdata->description = $requestData['description'];


                if($objexportdata->save()){
                    return 'true';
                }else{
                    return 'false';
                }

            return 'file_exits';

}
}
