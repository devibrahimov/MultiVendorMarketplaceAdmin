<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    protected $table = 'advertisements';
    protected $guarded = [] ;
    protected $casts   = ['stop_time' => 'datetime', 'start_time' => 'datetime'];
}
