<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Blog extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted()
    {
        static::creating(function ($blog) {
            if (Auth::check()) {
                $blog->user_id = Auth::id();
            }
        });
    }

    public function section()
    {
        return $this->belongsTo(BlogSection::class, 'blog_section_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail ? asset('storage/' . $this->thumbnail) : "https://ui-avatars.com/api/?name={$this->title}&color=7F9CF5&background=EBF4FF";
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'published');
    }
}