<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table='product';
    protected $primaryKey='prod_id'; 
    protected $fillable=[ 
        'prod_name', 
        'prod_price',
        'prod_desc',
        'prod_quantity',
        'prod_image',
        'prod_image2',
        'prod_image3',
        'prod_image4',
        'prod_desc1',
        'prod_desc2',
    ];
}
