<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Triangulo extends Model
{
    use HasFactory;

    protected $table = 'triangulos';
    protected $fillable = [
        'id',
        'descricao',
        'base',
        'altura',
        'area',
    ];
    public $timestamps = true;
}
