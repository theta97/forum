<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'subcategory',
        'category_id',
       
    ];

   
    public function Thread()
    {
        return $this->hasMany(Thread::class);
    }
}
