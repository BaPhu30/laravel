<?php

namespace App\Models;

use App\Models\BillInfo;
use App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'bills';
    protected $fillable = [
        'users_buyer_id',
        'users_shop_id',
    ];

    public function billsInfo()
    {
        return $this->hasMany(BillInfo::class, 'bill_id', 'id');
    }

    public function userBuyer()
    {
        return $this->belongsTo(Users::class, 'users_buyer_id', 'id');
    }

    public function userShop()
    {
        return $this->belongsTo(Users::class, 'users_shop_id', 'id');
    }
}
