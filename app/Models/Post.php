<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // boldeh diisi
    // protected $fillable = ['title', 'excerpt', 'body'];
    // tidak boleh diisi
    protected $guarded = ['id'];
    protected $with = ['author', 'category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id'); //user_id sebagai parameter alias untuk author, karena tidak ada author_id
    }
}
