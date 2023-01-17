<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partner extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'uf',
        'city',
        'type',
        'note',
    ];

    public function getTypeAttribute($value)
    {
        $arrType = [
            1 => 'Consumidor',
            2 => 'Nutricionista/Médico',
            3 => 'Lojista',
            4 => 'Outros'
        ];

        return $arrType[$value];
    }
}
