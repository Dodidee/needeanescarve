<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table='order';
    protected $primaryKey='order_id'; 
    protected $fillable=[ 
        'order_status',
        'created_at',
        'updated_at',
        'deleted_at',
        'order_payment',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cartid');
    }

    public function shipping()
    {
        return $this->belongsTo(Shipping::class, 'shipid');
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staffid');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'orderid');
    }

    // public function shipping()
    // {
    //     return $this->belongsTo(Shipping::class, 'ship_id');
    // }



    // public function product()
    // {
    //     return $this->belongsTo(Product::class, 'prod_id');
    // }
}
