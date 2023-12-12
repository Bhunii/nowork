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

    public function recruiter(){
        return $this->belongsTo(Recruiter::class, 'id_recruiter');
    }

    public function departament(){
        return $this->belongsTo(Departament::class, 'id_departament');
    }

    public function municipality(){
        return $this->belongsTo(Municipality::class, 'id_municipality');
    }
}
