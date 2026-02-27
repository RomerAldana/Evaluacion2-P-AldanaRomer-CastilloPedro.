<?php

namespace App\Http\Controllers;

use App\Models\Zona;
use App\Models\Propiedad;
use Illuminate\Http\Request;

class PropiedadController extends Controller
{
    public function index()
    {
        $propiedades = Propiedad::with('zona')->get();
        return view('propiedades.index', compact('propiedades'));
    }

    public function create()
    {
        $zonas = Zona::all();
        return view('propiedades.create', compact('zonas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'zona_id' => 'required|exists:zonas,id',
            'direccion' => 'required|string|max:255',
            'precio_alquiler' => 'required|numeric|min:0',
            'habitaciones' => 'required|integer|min:1',
            'disponible' => 'boolean',
            'descripcion' => 'nullable|string'
        ]);

        $validated['disponible'] = $request->has('disponible');

        Propiedad::create($validated);

        return redirect()->route('propiedades.index')
            ->with('success', 'Propiedad creada exitosamente.');
    }

    public function edit(Propiedad $propiedad)
    {
        $zonas = Zona::all();
        return view('propiedades.edit', compact('propiedad', 'zonas'));
    }

    public function update(Request $request, Propiedad $propiedad)
    {
        $validated = $request->validate([
            'zona_id' => 'required|exists:zonas,id',
            'direccion' => 'required|string|max:255',
            'precio_alquiler' => 'required|numeric|min:0',
            'habitaciones' => 'required|integer|min:1',
            'disponible' => 'boolean',
            'descripcion' => 'nullable|string'
        ]);

        $validated['disponible'] = $request->has('disponible');

        $propiedad->update($validated);

        return redirect()->route('propiedades.index')
            ->with('success', 'Propiedad actualizada exitosamente.');
    }

    public function destroy(Propiedad $propiedad)
    {
        $propiedad->delete();

        return redirect()->route('propiedades.index')
            ->with('success', 'Propiedad eliminada exitosamente.');
    }
}