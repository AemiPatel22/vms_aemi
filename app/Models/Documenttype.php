<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documenttype extends Model
{
    use HasFactory;
    protected $table = 'document_type';

    public function get_details(){
        return Documenttype::from('document_type')
                        ->select('document_type.id','document_type.document_for','document_type.document_name','document_type.validity_piriod',
                            'document_type.warn_before','document_type.status','document_type.is_expire','document_for.document_for')
                        // ->where('document_type.is_expire','N')
                        ->join('document_for','document_for.id','=' ,'document_type.id')
                        ->get()
                        ->toArray();
    }

    public function get_documentlist(){
        return Documenttype::from('document_type')
                       ->select('document_type.id','document_type.document_for','document_type.document_name','document_type.validity_piriod',
                          'document_type.warn_before','document_type.status','document_type.is_expire','document_for.document_for')
                        // ->where('document_type.is_expire','N')
                        ->join('document_for','document_for.id','=' ,'document_type.id')
                        ->get()
                        ->toArray();

    }

    public function add_doctype($requestData){
        $checkdoctype = Documenttype::where('document_type.document_name',$requestData['document_name'])->count();

        if($checkdoctype == 0)
        {
            $objDocumenttype = new Documenttype();



            $objDocumenttype->document_for = $requestData['document_for'];
            $objDocumenttype->document_name = $requestData['document_name'];
            $objDocumenttype->validity_piriod = $requestData['validity_piriod'];
            $objDocumenttype->warn_before = $requestData['warn_before'];
            $objDocumenttype->status = $requestData['status'];
            $objDocumenttype->is_expire = 'N';


            if($objDocumenttype->save()){
                return 'true';
            }else{
                return 'false';
            }
        }
        return 'doc_exits';
    }

    public function view_doctypedetails($docID){
        return Documenttype::from('document_type')
                        ->select('document_type.id','document_type.document_for','document_type.document_name','document_type.validity_piriod',
                              'document_type.warn_before','document_type.status','document_type.is_expire')
                        // ->where('document_type.is_expire','N')
                        ->where('document_type.id',$docID)
                        ->get()
                        ->toArray();
    }

    public function action_doctype($reqData){
        $objDocumenttype = Documenttype::find($reqData['data_id']);
        if($reqData['action_type'] == 2){
            $objDocumenttype->is_deleted= 'Y';

        }else{
            if($reqData['action_type'] == 0){
                $objDocumenttype->status = 'I';

            }else{
                $objDocumenttype->status = 'A';

            }
        }
        return $objDocumenttype->save();
    }

    public function edit_doctypedetails($docID){
        return Documenttype::from('document_type')
                        ->select('document_type.id','document_type.document_for','document_type.document_name','document_type.validity_piriod',
                              'document_type.warn_before','document_type.status','document_type.is_expire','document_for.document_for')
                        // ->where('document_type.is_expire','N')
                        ->join('document_for','document_for.id','=' ,'document_type.id')
                        ->where('document_type.id',$docID)
                        ->get()
                        ->toArray();
    }
    public function edit_doctype(){
        return Documenttype::from('document_type')
                        ->select('document_type.id','document_type.document_for','document_type.document_name','document_type.validity_piriod',
                              'document_type.warn_before','document_type.status','document_type.is_expire')
                        // ->where('document_type.is_expire','N')
                        ->get()
                        ->toArray();
    }

    public function save_edit_doctype($requestData){
        $checkdoctype = Documenttype::where('document_type.document_name',$requestData['document_name'])->count();

        if($checkdoctype == 0)
        {
            $objDocumenttype = new Documenttype();



            $objDocumenttype->document_for = $requestData['document_for'];
            $objDocumenttype->document_name = $requestData['document_name'];
            $objDocumenttype->validity_piriod = $requestData['validity_piriod'];
            $objDocumenttype->warn_before = $requestData['warn_before'];
            $objDocumenttype->status = $requestData['status'];
            $objDocumenttype->is_expire = 'N';


            if($objDocumenttype->save()){
                return 'true';
            }else{
                return 'false';
            }
        }
        return 'doc_exits';
    }


}



