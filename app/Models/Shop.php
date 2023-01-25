<?php

namespace App\Models;

use App\Models\Bill;
use App\Models\Product;
use App\Models\UserRole;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $table = 'shop';
    protected $fillable = [
        'user_role_id',
        'name',
        'avatar',
        'shopee_mall',
    ];

    public function bills()
    {
        return $this->hasMany(Bill::class, 'shop_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'shop_id', 'id');
    }

    public function userrole()
    {
        return $this->belongsTo(UserRole::class, 'user_role_id', 'id');
    }
}
