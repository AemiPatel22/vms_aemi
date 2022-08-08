<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Exports\UserExport;
use Excel;

class UserController extends Controller
{
    //
    public function export()
    {
       return Excel::download(new UsersExport(), 'users.xlsx');
    }

}
