<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    use HasFactory;

    protected $table = "charges";

    protected $fillable = [
        'id_vacancy',
        'id_denomination',
        'id_function',
        'payment_method',
        'salary',
        'type_contract'
    ];
}
