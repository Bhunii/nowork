<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    use HasFactory;

    protected $table = "recruiters";

    protected $fillable = [
        'user_id',
        'admission_date'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function company(){
        return $this->hasOne(Company::class, 'id_company');
    }
}
