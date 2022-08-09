<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDFData extends Model
{
    use HasFactory;
    protected $table = 'export_data';

    public function get_details(){
        return PDFData::from('export_data')
                            ->select('export_data.first_name','export_data.last_name','export_data.email','export_data.gender',
                             'export_data.phone_number','export_data.description','export_data.id')
                            ->get()
                            ->toArray();

    }
}
