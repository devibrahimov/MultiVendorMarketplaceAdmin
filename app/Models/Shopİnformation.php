<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shopİnformation extends Model
{
    use HasFactory;
    protected $table = 'shop_information';


    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class)->withDefault();
    }

}
