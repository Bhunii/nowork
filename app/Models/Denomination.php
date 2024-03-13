<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denomination extends Model
{
    use HasFactory;

    protected $table = "denominations";

    protected $fillable = [
        'code_occupation',
        'code',
        'description'
    ];

    public function occupation(){
        return $this->belongsTo(Occupation::class, 'code_occupation');
    }
}
