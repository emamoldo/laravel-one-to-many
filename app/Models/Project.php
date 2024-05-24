<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'content', 'cover_image', 'category_id'];


    public function category(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
