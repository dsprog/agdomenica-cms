<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Discipline extends Model
{
    use HasFactory;

    protected $fillable = ['ead_id','user_id','title', 'active'];

    public function user() :BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function ead() :BelongsTo
    {
        return $this->belongsTo(\App\Models\Ead::class);
    }

    public function lessons() :HasMany
    {
        return $this->hasMany(\App\Models\Lesson::class);
    }

    public function notes() :HasMany
    {
        return $this->hasMany(\App\Models\Note::class);
    }


}
