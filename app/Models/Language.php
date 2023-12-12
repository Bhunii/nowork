<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $table= "languages";

    protected $fillable = [
    'id_curriculum',
    'id_type_language'
    ];

    public function type_language(){
        return $this->belongsTo(TypeLanguage::class, 'id_type_language');
    }
}
