<?php

namespace App\Models;

use App\Models\UserRole;
use App\Models\Product;
use App\Models\Comment;
use App\Models\CommentLike;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'phone', 
        'avatar', 
        'birthday', 
        'male', 
    ];


    public function userRoles()
    {
        return $this->hasMany(UserRole::class , 'users_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class , 'users_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class , 'users_id', 'id');
    }

    public function commentLikes()
    {
        return $this->hasMany(CommentLike::class , 'users_id', 'id');
    }
}