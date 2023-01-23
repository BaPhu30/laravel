<?php

namespace App\Models;

use App\Models\Bill;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillInfo extends Model
{
    use HasFactory;
    protected $table = 'bill_info';
    protected $fillable = [
        'bill_id',
        'product_id',
        'sold',
    ];

    public function bill()
    {
        return $this->belongsTo(Bill::class, 'bill_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
