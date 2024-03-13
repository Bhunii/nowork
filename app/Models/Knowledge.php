<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    use HasFactory;

    protected $table = "knowledge";

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
