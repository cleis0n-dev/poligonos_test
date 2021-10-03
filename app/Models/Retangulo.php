<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retangulo extends Model
{
    use HasFactory;

    protected $table = 'retangulos';
    protected $fillable = [
        'id',
        'descricao',
        'base',
        'altura',
        'area',
    ];
    public $timestamps = true;
}
