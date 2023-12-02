<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;

    protected $table = "processes";

    protected $fillable = [
        'id_vacancy',
        'id_candidate',
        'date_applied',
        'id_selection_status',
        'points'
    ];

}
