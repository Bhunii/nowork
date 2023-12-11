<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    use HasFactory;

    protected $table = "occupations";

    protected $fillable = [
        'code_occupation',
        'name',
        'description'
    ];

    
    public function skills() {
        return $this->hasMany(Skill::class, 'code_occupation');
    }
    
    public function relations() {
        return $this->hasMany(Relation::class, 'code_occupation');
    }
    
    public function knowledges() {
        return $this->hasMany(Knowledge::class, 'code_occupation');
    }

    public function functions() {
        return $this->hasMany(Functions::class, 'code_occupation');
    }

    public function denominations() {
        return $this->hasMany(Denomination::class, 'code_occupation');
    }
}
