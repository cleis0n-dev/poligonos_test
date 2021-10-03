<?php
use App\Http\Controllers\RetanguloController;
use App\Http\Controllers\TrianguloController;
use App\Http\Controllers\Api\PoligonosController;

/* Habilitar caso deseje utilizar a Api completa
--> Retângulos
Route::get('retangulos',                [RetanguloController::class,'index'])->name('index');
Route::get('retangulos/show/{id}',      [RetanguloController::class, 'show']);
Route::put('retangulos/update/{id}',    [RetanguloController::class, 'update']);
Route::get('retangulos/delete/{id}',    [RetanguloController::class, 'destroy']);

--> Triângulos
Route::get('triangulos',                [TrianguloController::class,'index'])->name('index');
Route::get('triangulos/show/{id}',      [TrianguloController::class, 'show']);
Route::put('triangulos/update/{id}',    [TrianguloController::class, 'update']);
Route::get('triangulos/delete/{id}',    [TrianguloController::class, 'destroy']);

*/
/** */
Route::post('retangulos/create',        [RetanguloController::class, 'store']);
Route::post('triangulos/create',        [TrianguloController::class, 'store']);
Route::get('poligonos',                 [PoligonosController::class, 'show']);
?>