<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable=[
        'product_id','user_id','quantity','size',
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public $timestamps = false;
}
