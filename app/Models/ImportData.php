<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ImportData extends Model
{
    use HasFactory;

    protected $table = 'export_data';

    protected $fillable  = ['first_name','last_name','email','gender','phone_number','description'];

    public static function get_data(){
        $records = DB::table('export_data')
                    ->select('first_name','last_name','email','gender','phone_number','description','id')
                     ->get()
                    ->toArray();
                    return $records;
    }
}
