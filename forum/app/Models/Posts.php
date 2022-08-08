<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'comment',
        'thread_id',
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function Users_Post()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function Thread_Post()
    {
        return $this->belongsTo(Thread::class, 'thread_id');
    }
}
