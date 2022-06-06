<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $primaryKey = "token";

    public $fillable = [
        'token',    
        'from_user',
        'to_product',                    
        'dana',
        'is_paid'
    ];

}
