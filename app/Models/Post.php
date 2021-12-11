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

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
