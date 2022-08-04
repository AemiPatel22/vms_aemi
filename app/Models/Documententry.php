<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documententry extends Model
{
    use HasFactory;
    protected $table = 'document_entry';


    public function get_details(){
        return Documententry::from('document_entry')
                        ->select('document_entry.id','document_entry.document_for','document_entry.document_type','document_entry.document_of',
                            'document_entry.issue_date','document_entry.expriy_date','document_entry.document_number','document_entry.issue_place',
                            'document_entry.status','document_for.id as d_for','document_for.document_for','document_type.document_name as d_type','document_of.document_of as d_of')
                         ->join('document_for','document_for.id','=' ,'document_entry.document_for')
                         ->join('document_of','document_of.id','=' ,'document_entry.document_of')
                         ->join('document_type','document_type.id','=' ,'document_entry.document_type')
                        ->where('document_entry.is_deleted','N')
                        ->get()
                        ->toArray();
    }

    public function get_entrytlist(){
        return Documententry::from('document_entry')
                        ->join('document_for','document_for.id','=' ,'document_entry.document_for')
                         ->join('document_of','document_of.id','=' ,'document_entry.document_of')
                         ->join('document_type','document_type.id','=' ,'document_entry.document_type')
                        ->select('document_entry.id','document_entry.document_for','document_entry.document_type','document_entry.document_of',
                            'document_entry.issue_date','document_entry.expriy_date','document_entry.document_number','document_entry.issue_place',
                            'document_entry.status','document_for.id as d_for','document_for.document_for','document_type.document_name as d_type','document_of.document_of as d_of')

                        ->where('document_entry.is_deleted','N')
                        ->get()
                        ->toArray();
    }

    public function add_docentry($requestData){
        $checkdocentry = Documententry::where('document_entry.document_type',$requestData['document_type'])->count();

        if($checkdocentry == 0)
        {
            $objDocumententry = new Documententry();



            $objDocumententry->document_for = $requestData['document_for'];
            $objDocumententry->document_type = $requestData['document_type'];
            $objDocumententry->document_of = $requestData['document_of'];
            $objDocumententry->issue_date = $requestData['issue_date'];
            $objDocumententry->expriy_date = $requestData['expriy_date'];
            $objDocumententry->document_number = $requestData['document_number'];
            $objDocumententry->issue_place = $requestData['issue_place'];
            $objDocumententry->status = $requestData['status'];



            if($objDocumententry->save()){
                return 'true';
            }else{
                return 'false';
            }
        }
        return 'doc_exits';
    }

    public function action_docentry($reqData){
        $objDocumententry = Documententry::find($reqData['data_id']);
        if($reqData['action_type'] == 2){
            $objDocumententry->is_deleted = 'Y';

        }else{
            if($reqData['action_type'] == 0){
                $objDocumententry->status = 'I';

            }else{
                $objDocumententry->status = 'A';

            }
        }
        return $objDocumententry->save();
    }

    public function view_docentrydetails($docID){
        return Documententry::from('document_entry')
                        ->select('document_entry.id','document_entry.document_for','document_entry.document_type','document_entry.document_of',
                            'document_entry.issue_date','document_entry.expriy_date','document_entry.document_number','document_entry.issue_place',
                            'document_entry.status','document_entry.is_deleted')
                        ->where('document_entry.is_deleted','N')
                        ->where('document_entry.id',$docID)
                        ->get()
                        ->toArray();
    }

}
