<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    protected $fillable=[
      'order_status','product_id','user_id','quantity','order_stats','size','flavour','ip','customer_id'
    ];
}
