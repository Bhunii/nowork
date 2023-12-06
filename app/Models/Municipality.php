<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    protected $table = "municipalities";

    protected $fillable=[
        'id_departament',
        'code',
        'name'
    ];

    public function departament()
    {
        return $this->belongsTo(Departament::class, 'id_departament', 'id');
    }
}
