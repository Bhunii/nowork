<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    use HasFactory;

    protected $table = "charges";

    protected $fillable = [
        'id_vacancy',
        'id_denomination',
        'functions',
        'payment_method',
        'salary',
        'type_contract'
    ];

    public function users(){
        return $this->belongsTo(User::class,'id_vacancy','id');
    }

    public function denomination(){
        return $this->belongsTo(Denomination::class,'id_denomination');
    }

    public function function(){
        return $this->belongsTo(Functions::class,'id_function');
    }

}
