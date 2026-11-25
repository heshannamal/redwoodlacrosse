<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedules';

    protected $fillable = [
        'date',
        'day',
        'opponent',
        'location',
        'time',
        'team',
    ];

    public $timestamps = false; 
}
