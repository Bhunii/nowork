<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $table = "instructors";

    protected $fillable = [
        'user_id',
        'profession',
        'speciality'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
