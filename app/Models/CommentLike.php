<?php

namespace App\Models;

use App\Models\Users;
use App\Models\Comment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentLike extends Model
{
    use HasFactory;
    protected $table = 'comment_like';
    protected $fillable = [
        'id',
        'users_id',
        'comment_id',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class, 'users_id', 'id');
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id', 'id');
    }
}
