<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Product extends Model
{
    use HasFactory;    

    public $fillable = [        
        'startup_id',           
        'title',
        'kategori',
        'likers',         
        'images' ,
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

    public function productDetail()
    {
        return $this->hasOne(ProductDetail::class, "product_id");
    }

    public function productDetailTitle()
    {
        return $this->hasOne(ProductDetail::class, "title");
    }
    
    public function productDetailKategori()
    {
        return $this->hasOne(ProductDetail::class, "kategori");
    }
}
