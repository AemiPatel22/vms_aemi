<?php

namespace App\Imports;

use App\Models\ImportData;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ImportData([
           'first_name' => $row['first_name'],
           'last_name' => $row['last_name'],
           'email' => $row['email'],
           'gender' => $row['gender'],
           'phone_number' => $row['phone_number'],
           'description' => $row['description'],

        ]);
    }
}
