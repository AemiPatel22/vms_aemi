<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Exports\StudentExport;
use Excel;

class UserController extends Controller
{
    //
    public function export()
    {
       return Excel::download(new StudentExport(), 'users.xlsx');
    }

    public function importForm (){

    }





}
