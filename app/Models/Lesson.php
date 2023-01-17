<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'ead_id',
        'discipline_id',
        'title',
        'resume',
        'vimeo_id',
        'download_url',
        'active',
        'expiration_date',
        'published_at'
    ];

    public function ead() :BelongsTo
    {
        return $this->belongsTo(\App\Models\Ead::class);
    }

    public function discipline() :BelongsTo
    {
        return $this->belongsTo(\App\Models\Discipline::class);
    }

    public function users() :BelongsToMany
    {
        return $this->belongsToMany(\App\Models\User::class)->withPivot(['user_id', 'lesson_id', 'attended_class']);
    }
}
