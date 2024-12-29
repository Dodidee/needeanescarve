<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table='admin';
    protected $primaryKey='admin_id'; 
    protected $fillable=[ 
        'username', 
        'admin_email',
        'admin_password',
    ];
}
