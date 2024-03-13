<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Function name is replaced to Functions for <<The name "Function" is reserved by PHP>>
class Functions extends Model
{
    use HasFactory;

    protected $table = "functions";

    protected $fillable = [
        'code_occupation',
        'code',
        'description'
    ];

    public function occupation(){
        return $this->belongsTo(Occupation::class, 'code_occupation');
    }
}
