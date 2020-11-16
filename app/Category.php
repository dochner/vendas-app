<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name', 'product_id'
    ];

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
