<?php

namespace App\Models;

use App\Models\BillInfo;
use App\Models\Users;
use App\Models\UserRole;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $fillable = [
        'name',
    ];

    public function userRoles()
    {
        return $this->hasMany(UserRole::class, 'role_id', 'id');
    }
}
