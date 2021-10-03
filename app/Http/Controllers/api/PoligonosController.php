<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoligonosController extends Controller
{
    public function show(){
        $retangulo = DB::table('retangulos')->select(['descricao','area'])->get();
        $triangulo = DB::table('triangulos')->select(['descricao','area'])->get();

        $poligono = compact('retangulo','triangulo');
        return $poligono;
    }
}
