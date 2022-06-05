<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    public $fillable = [
        'startup',        
        'title',
        'kategori',
        'likers',           
        'invests'        
    ];

    public function startup() 
    {
        return $this->belongsTo(Startup::class);
    }

    public function likers()
    {
        return $this->embedsMany(User::class);
    }
    
    public function invests()
    {
        return $this->embedsMany(User::class);
    }
}
