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

    public function skill() {
        return $this->hasOne(Skill::class, 'code_occupation');
    }

    public function relations() {
        return $this->hasMany(Relation::class, 'code_occupation');
    }

    public function relation() {
        return $this->hasOne(Relation::class, 'code_occupation');
    }

    public function knowledges() {
        return $this->hasMany(Knowledge::class, 'code_occupation');
    }

    public function knowledge() {
        return $this->hasOne(Knowledge::class, 'code_occupation');
    }

    public function functions()
    {
        return $this->hasMany(Functions::class, 'code_occupation', 'code_occupation');
    }

    public function function() {
        return $this->hasOne(Functions::class, 'code_occupation');
    }

    public function denominations() {
        return $this->hasMany(Denomination::class, 'code_occupation');
    }
    public function denomination() {
        return $this->hasOne(Denomination::class, 'code_occupation');
    }
}
