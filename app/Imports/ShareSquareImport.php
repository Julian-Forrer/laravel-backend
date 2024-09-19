<?php

namespace App\Imports;

use App\Models\ShareSquare;
use Maatwebsite\Excel\Concerns\ToModel;

class ShareSquareImport implements ToModel
{
    public function model(array $row)
    {
        return new ShareSquare([
            'planid'    => $row[0],
            'firstname' => $row[1],
            'lastname'  => $row[2],
            'email'     => $row[3],
            'kpi'       => $row[4],
            'value'     => $row[5],
            'date'      => $row[6],
        ]);
    }
}
