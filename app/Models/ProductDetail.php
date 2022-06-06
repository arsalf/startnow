<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class ProductDetail extends Product
{
    use HasFactory;

    protected $primaryKey = "product_id";
    
    // public $fillable = [
    //     '_id',
    //     'startup_id',  
    //     'product_id',      
    //     'title',
    //     'kategori',
    //     'likers',         
    //     'images'     
    // ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mergeFillable(['product_id', 'invests', 'proposal_files', 'modal', 'comments']);
    }

}
