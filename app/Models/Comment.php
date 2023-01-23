<?php

namespace App\Models;

use App\Models\Users;
use App\Models\Product;
use App\Models\CommentLike;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    protected $fillable = [
        'id',
        'users_id',
        'product_id',
        'comment_parent_id',
        'main',
        'img',
        'video',
        'reviews',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class, 'users_id', 'id');
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function commentLikes()
    {
        return $this->hasMany(CommentLike::class, 'comment_id', 'id');
    }
}
