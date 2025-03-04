<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    
    protected $guarded = [];
    
    public $timestamps = false;
    
    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    
}
