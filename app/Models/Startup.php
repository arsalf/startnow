<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Startup extends Model
{
    use HasFactory;
    
    protected $dates = ['tanggal_berdiri'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $fillable = [
        'owner',        
        'name',
        'deskripsi',
        'thumbnail',
        'email',           
        'tanggal_berdiri',        
        'no_hp',
        'alamat',
        'members'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [    
        'remember_token',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function members()
    {
        return $this->embedsMany(Member::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class, "startup_id");
    }
}
