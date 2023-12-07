<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departament extends Model
{
    use HasFactory;

    protected $table = "departaments";

    protected $fillable=[
        'code',
        'name'
    ];

    public function municipalities(): HasMany
    {
        return $this->hasMany(Municipality::class, 'id_departament', 'id');
    }
}
