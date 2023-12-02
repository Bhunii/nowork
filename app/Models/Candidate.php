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
}
