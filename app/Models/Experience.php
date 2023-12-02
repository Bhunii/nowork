<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $table = "experiences";

    protected $fillable = [
        'id_curriculum',
        'name_company',
        'adress',
        'id_denomination',
        'id_function',
        'start_date',
        'end_date'
    ];

}
