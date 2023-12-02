<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selector extends Model
{
    use HasFactory;

    protected $table = "selectors";

    protected $fillable = [
        'id_user',
        'id_company',
        'admission_date'
    ];
}
