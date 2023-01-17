<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'client_id',
        'title',
        'resume',
        'slug',
        'content',
        'image',
        'status'
    ];
}
