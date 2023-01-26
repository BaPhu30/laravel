<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messenger extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'user_id',
        'room_id',
        'text',
        'messenger_parent_id',
        'created_at',
        'updated_at'
    ];
}
