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

    protected $attributes = [
        'occupational_profile' => 'Aqui va tu perfil ocupacional.',
    ];
}
