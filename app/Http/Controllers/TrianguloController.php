<?php

namespace App\Http\Controllers;

use App\Models\Triangulo;
use Illuminate\Http\Request;

class TrianguloController extends Controller
{
    public function index()
    {
       return Triangulo::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $area = ($request->base * $request->altura) / 2;
        $data['area'] = $area;
        Triangulo::create($data);

    }

   

    public function show($id)
    {
        return Triangulo::findOrfail($id);
    }


    public function update(Request $request, $id)
    {
        $triangulo = Triangulo::findOrfail($id);

        $data = $request->all();
        $area = ($request->base * $request->altura) / 2;
        $data['area'] = $area;

        $retangulo->update($data);
    }

    public function destroy($id)
    {
        $triangulo = Triangulo::findOrfail($id);
        $triangulo ->delete();

    }
}
