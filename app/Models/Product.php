<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'code',
        'info1',
        'info1_text',
        'info2',
        'info2_text',
        'info3',
        'info3_text',
        'capa',
        'image',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function product_gallery()
    {
        return $this->hasMany(ProductGallery::class);
    }

    public function infos() :BelongsToMany
    {
        return $this->belongsToMany(\App\Models\Info::class)->withPivot('product_id', 'info_id');
    }
}
