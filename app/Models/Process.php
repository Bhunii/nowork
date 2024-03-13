<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;

    protected $table = "processes";

    protected $attributes = [
        'id_selection_status' => '1',
    ];

    protected $fillable = [
        'id_vacancy',
        'id_candidate',
        'date_applied',
        'points'
    ];

    public function candidate(){
        return $this->belongsTo(Candidate::class, 'id_candidate');
    }

    public function vacancy(){
        return $this->belongsTo(Vacancy::class, 'id_vacancy');
    }
    public function selection_status(){
        return $this->belongsTo(SelectionStatus::class, 'id_selection_status');
    }

}
