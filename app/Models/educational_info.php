<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class educational_info extends Model
{
    //
    use HasFactory;
    protected $table = 'educational_info';

    protected $fillable = [
        'current_level_of_education',
        'school_or_uni_name'
    ];
}
