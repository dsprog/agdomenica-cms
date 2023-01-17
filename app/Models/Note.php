<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'discipline_id'];

    public function disicpline() :BelongsTo
    {
        return $this->belongsTo(\App\Models\Discipline::class);
    }

    public function users() :BelongsToMany
    {
        return $this->belongsToMany(\App\Models\User::class)->withPivot(['user_id', 'note_id', 'note'])->withTimestamps();
    }
}
