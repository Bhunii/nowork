<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeLanguage extends Model
{
    use HasFactory;

    protected $table = "types_languages";

    protected $fillable = [
        'name',
        'level'
    ];
}
