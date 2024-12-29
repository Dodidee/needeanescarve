<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table='customer';
    protected $primaryKey='cust_id'; 
    protected $fillable=[ 
        'username', 
        'cust_email',
        'cust_Fname',
        'cust_phoneNo',
        'cust_password',
    ];

    public function shippings()
    {
        return $this->hasMany(Shipping::class);
    }
}

