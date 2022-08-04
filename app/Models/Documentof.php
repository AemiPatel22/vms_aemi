<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentof extends Model
{
    use HasFactory;

    protected $table = 'document_of';
     public function action_documentof($requestData){
        return Documentof::where('document_of.id',  $requestData['doctypeId'])
        ->select('document_of.document_of', 'document_of.id')
       ->get()
       ->toArray();
   }

}
