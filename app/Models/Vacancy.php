<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $table = "vacancies";

    protected $fillable = [
        'id_company',
        'occupational_profile',
        'number_vacancy',
        'workday',
        'id_departament',
        'id_municipality',
        'addres',
        'start_date',
        'end_date'
    ];

    public function company(){
        return $this->belongsTo(Company::class, 'id_company');
    }

    public function departament(){
        return $this->belongsTo(Departament::class, 'id_departament');
    }

    public function municipality(){
        return $this->belongsTo(Municipality::class, 'id_municipality');
    }

    public function charge(){
        return $this->hasOne(Charge::class, 'id_vacancy');
    }

    public function process(){
        return $this->hasOne(Process::class, 'id_vacancy');
    }

    public function processes(){
        return $this->hasMany(Process::class, 'id_vacancy');
    }

}
