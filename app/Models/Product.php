<?php

namespace App\Models;

use App\Models\ProductCupon;
use App\Models\ProductPrice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function productPrice()
    {
        return $this->hasOne(ProductPrice::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function productImage()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function wishList()
    {
        return $this->hasMany(ProductWishlist::class);
    }
}
