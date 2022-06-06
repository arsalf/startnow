<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public $fillable = [              
        'name'        
    ];

}
