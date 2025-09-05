<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogSection extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function scopeActive($q)
    {
        return $q->where('status' , 'active');
    }

    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail ? asset('storage/' . $this->thumbnail) : "https://ui-avatars.com/api/?name={$this->title}&color=7F9CF5&background=EBF4FF";
    }
}
