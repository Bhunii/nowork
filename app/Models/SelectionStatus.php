<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectionStatus extends Model
{
    use HasFactory;

    protected $table = "selection_status";

    protected $fillable = [
        'name',
        'description'
    ];
}
