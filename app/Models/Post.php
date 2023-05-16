<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;


    protected $with = ['category', 'auther'];

    public function scopeFilter($query, array $filters)
    {
        
        $query->when($filters['search'] ?? false, function($query, $search)
        {
                
            $query->where(fn($query)=>
            $query
            ->where('title', 'like', '%' . $search . '%')
            ->orWhere('excerpt', 'like', '%' . $search . '%')
        );
        });
        
   

        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereHas('category', fn ($query) =>
                $query->where('slug', $category)
            )
        );

        $query->when($filters['auther'] ?? false, fn($query, $auther) =>
        $query->whereHas('auther', fn ($query) =>
            $query->where('username', $auther)
        )
    );
}
            

        public function comments()
        {
                return $this->HasMany(Comment::class);
        }

    

        public function category()
        
        {
                return $this->belongsTo(Category::class);
        }

        public function auther()
        {
                return $this->belongsTo(User::class, 'user_id');
        }
        

}