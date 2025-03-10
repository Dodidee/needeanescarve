<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='cart';
    protected $primaryKey='cart_id'; 
    protected $fillable=[ 
        'prod_name', 
        'prod_price',
        'prod_image',
        'user_id',
        'created_at',

    ];
}
