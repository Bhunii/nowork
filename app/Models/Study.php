<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;

    protected $table = "studies";

    protected $fillable = [
        'id_curriculum',
        'name_institution',
        'id_denomination',
        'id_departament',
        'id_municipality',
        'addres',
        'end_date'
    ];

    public function departament(){
        return $this->belongsTo(Departament::class, 'id_departament');
    }

    public function municipality(){
        return $this->belongsTo(Municipality::class, 'id_municipality');
    }

}
