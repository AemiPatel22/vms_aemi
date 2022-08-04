<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Do_;

class Doctype extends Model
{
    use HasFactory;
    protected $table = 'document_type';

    public function action_documenttype($requestData){
        return Documenttype::where('document_type.id',  $requestData['docforId'])
        ->select('document_type.document_name', 'document_type.id')

       ->get()
       ->toArray();
    }


}
