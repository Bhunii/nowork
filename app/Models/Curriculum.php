<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    protected $table = "curriculum";

    protected $fillable = [
        'id_candidate',
        'occupational_profile'
    ];

    public function studies()
    {
        return $this->hasMany(Study::class, 'id_curriculum');
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class, 'id_curriculum');
    }

    public function languages()
    {
        return $this->hasMany(Language::class, 'id_curriculum');
    }
}
