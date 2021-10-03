<?php

namespace App\Http\Controllers;

use App\Models\Retangulo;
use Illuminate\Http\Request;

class RetanguloController extends Controller
{
    public function index()
    {
       return Retangulo::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $area = $request->base * $request->altura;
        $data['area'] = $area;
        Retangulo::create($data);

    }

   

    public function show($id)
    {
        return Retangulo::findOrfail($id);
    }


    public function update(Request $request, $id)
    {
        $retangulo = Retangulo::findOrfail($id);

        $data = $request->all();
        $area = $request->base * $request->altura;
        $data['area'] = $area;

        $retangulo->update($data);
    }

    public function destroy($id)
    {
        $retangulo = Retangulo::findOrfail($id);
        $retangulo->delete();

       
    }
}
