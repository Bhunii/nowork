<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $table = "skills";

    protected $fillable = [
        'code_occupation',
        'code',
        'name',
        'description'
    ];

    public function occupation(){
        return $this->belongsTo(Occupation::class, 'code_occupation');
    }
}
