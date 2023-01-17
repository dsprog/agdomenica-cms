<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ead extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'resume',
        'body',
        'active',
        'expiration_date',
        'published_at'
    ];

    public function disciplines() :HasMany
    {
        return $this->hasMany(\App\Models\Discipline::class);
    }

    public function lessons() :HasMany
    {
        return $this->hasMany(\App\Models\Lesson::class);
    }

    public function users() :BelongsToMany
    {
        return $this->belongsToMany(\App\Models\User::class)->withPivot(['user_id', 'ead_id', 'active']);
    }
}
