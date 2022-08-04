<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentfor extends Model
{
    use HasFactory;

    protected $table = 'document_for';
     public function get_docfor_list(){
        return Documentfor::select('document_for.document_for', 'document_for.id')
        ->get()
        ->toArray();
     }

}
