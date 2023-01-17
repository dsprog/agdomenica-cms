<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sac extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'type',
        'message',
    ];

    protected $arrTypes = [
        1 => 'Dúvida',
        2 => 'Sugestão',
        3 => 'Reclamação',
        4 => 'Elogio',
        5 => 'Outros'
    ];

    public function getTypeAttribute($value)
    {
        return $this->arrTypes[$value];
    }

}
