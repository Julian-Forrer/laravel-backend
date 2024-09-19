<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareSquare extends Model
{
    use HasFactory;

    protected $table = 'sharesquare';
    protected $fillable = ['planid', 'firstname', 'lastname', 'email', 'kpi', 'value', 'date']; // This lets Laravel know which columns can be mass filled
}
