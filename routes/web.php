<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZonaController;
use App\Http\Controllers\PropiedadController;


Route::resource('propiedades', PropiedadController::class)->parameters([
    'propiedades' => 'propiedad'
]);

Route::resource('zonas', ZonaController::class);

Route::get('/', function () {
    return redirect()->route('propiedades.index');
});