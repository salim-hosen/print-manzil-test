<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'category_id',
        'product_name',
        'slug',
        'user_id'
    ];


    public function store(){
        return $this->belongsTo(Store::class);
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }

}
