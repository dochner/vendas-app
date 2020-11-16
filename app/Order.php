<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable =[
        'total', 'quantity'
    ];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function products(){
        $this->hasMany(Product::class);
    }

}
