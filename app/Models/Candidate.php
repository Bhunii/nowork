<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $table = "candidates";

    protected $fillable = [
        'user_id',
        'id_departament',
        'id_municipality',
        'addres'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function departament(){
        return $this->belongsTo(Departament::class, 'id_departament');
    }

    public function municipality(){
        return $this->belongsTo(Municipality::class, 'id_municipality');
    }

    public function curriculum(){
        return $this->hasOne(Curriculum::class, 'id_candidate');
    }
}
