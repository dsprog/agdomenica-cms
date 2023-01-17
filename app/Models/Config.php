<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'address_number',
        'address_city',
        'address_state',
        'address_cep',
        'address_complement',
        'phone',
        'phone2',
        'email',
        'facebook',
        'instagram',
        'linkedin',
        'whatsapp',
        'map'
    ];

    public $timestamps = false;
}
