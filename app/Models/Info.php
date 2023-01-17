<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Info extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image'];

    public function products() :BelongsToMany
    {
        return $this->belongsToMany(\App\Models\Product::class)->withPivot(['info_id', 'product_id']);
    }
}
