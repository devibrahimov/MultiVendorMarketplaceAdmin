<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStatistics extends Model
{
    use HasFactory;
    protected $primaryKey = 'static_id';
    protected $guarded = [] ;

    public function product()
    {
        return $this->belongsTo(Product::class)
            ->select(['id','key','images', 'slug', 'sku', 'barkode', 'name', 'sale_price','price',])

            ->where('access',1);

    }
    public function hasWish()
    {
        return $this->belongsTo(Wish::class);
    }
}
