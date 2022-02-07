<?php

namespace App\Imports;

use App\Models\Backend\County;
use Maatwebsite\Excel\Concerns\ToModel;

class CountyImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new County([
            //
            'name' => $row[0],
            'code' => $row[1]
        ]);
    }
}
