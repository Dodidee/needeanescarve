<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table='staff';
    protected $primaryKey='staff_id'; 
    protected $fillable=[  
        'username',
        'staff_Fname',
        'staff_email',
        'staff_phoneNo',
        'staff_password',

    ];
}
