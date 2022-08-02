<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documententry extends Model
{
    use HasFactory;
    protected $table = 'document_entry';
    public function get_details(){
        return Documenttype::from('document_entry')
                        ->select('document_entry.id','document_entry.document_for','document_entry.document_type','document_entry.document_of',
                            'document_entry.issue_date','document_entry.expriy_date','document_entry.document_number','document_entry.issue_place',
                            'document_entry.status')
                        // ->where('document_type.is_expire','N')
                        ->get()
                        ->toArray();
    }

}
