<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'Title',
        'Content',
        'Tag',
        'forum_id',
        'user_id',
        'created_at',
        'updated_at'
    ];
    
    public function ThreadPost()
    {
        return $this->hasMany(Posts::class);
    }
    public function User_Thread()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function Forum_Thread()
    {
        return $this->belongsTo(Forum::class, 'forum_id');
    }
}

