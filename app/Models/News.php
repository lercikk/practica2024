<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', // Adăugăm câmpul pentru titlu
        'description',
        'image'
    ];
    

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
