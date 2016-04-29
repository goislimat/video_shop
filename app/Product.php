<?php

namespace Shop;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description'
    ];
    
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
