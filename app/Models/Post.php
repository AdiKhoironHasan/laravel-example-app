<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    // boldeh diisi
    // protected $fillable = ['title', 'excerpt', 'body'];
    // tidak boleh diisi    
    protected $guarded = ['id'];
    protected $with = ['author', 'category'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        // dd($filters['category']);
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
                // dd($query);
            });
            // $query->where('slug', $category);
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->whereHas('author', function ($query) use ($author) {
                $query->where('username', $author);
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

    // Route Model Binding Customizing The Key, untuk mencari post pada model post dengan berdasarkan slug, dari sebelumnya default (dengan id)
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
