<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shipping extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table='shipping';
    protected $primaryKey='ship_id'; 
    protected $fillable=[ 
        'ship_name', 
        'ship_phoneNo',
        'ship_address',
        'ship_city',
        'ship_state',
        'ship_code',
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cartid');
    }

}