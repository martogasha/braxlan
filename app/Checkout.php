<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable=[
        'product_id','user_id','quantity','size','ip','flavour',
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public $timestamps = false;
}
