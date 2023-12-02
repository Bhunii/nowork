<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = "companies";

    protected $fillable = [
        'id_recruiter',
        'name',
        'nit',
        'company_name',
        'email',
        'nature',
        'id_departament',
        'id_municipality',
        'addres',
        'phone'
    ];

}
