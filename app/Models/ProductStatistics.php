<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStatistics extends Model
{
    use HasFactory;
    protected $primaryKey = 'static_id';
    protected $guarded = [] ;
}
