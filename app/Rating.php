<?php

namespace Shop;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'product_id',
        'rating',
        'comment'
    ];
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
