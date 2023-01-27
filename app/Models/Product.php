<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\Comment;
use App\Models\ProductInfo;
use App\Models\CategoryChild;
use App\Models\BillInfo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'id',
        'category_child_id',
        'shop_id',
        'title',
        'img',
        'video',
        'sold',
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'product_id', 'id');
    }

    public function productInfo()
    {
        return $this->hasOne(ProductInfo::class, 'product_id', 'id');
    }

    public function categoryChild()
    {
        return $this->belongsTo(CategoryChild::class, 'category_child_id', 'id');
    }

    public function billsInfo()
    {
        return $this->hasMany(BillInfo::class, 'bill_id', 'id');
    }
}
