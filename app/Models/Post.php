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

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')->orWhere('body', 'like', '%' . $search . '%');
            // return $query;
        });
        // dd($filters['category']);
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
                // dd($query);
            });
            // $query->where('slug', $category);
        });
    }

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
