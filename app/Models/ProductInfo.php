<?php

namespace App\Models;

use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInfo extends Model
{
    use HasFactory;
    protected $table = 'product_info';
    protected $fillable = [
        'id',
        'product_id',
        'origin',
        'expiry',
        'amount',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
