<?php

namespace App\Models;

use App\Models\BillInfo;
use App\Models\Users;
use App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    protected $table = 'user_role';
    protected $fillable = [
        'users_id',
        'role_id',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class, 'users_id', 'id');
    }

    public function shops()
    {
        return $this->hasMany(Shop::class, 'user_role_id', 'id');
    }
}
