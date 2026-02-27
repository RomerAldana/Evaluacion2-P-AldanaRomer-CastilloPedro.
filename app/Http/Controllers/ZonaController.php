<?php

namespace App\Http\Controllers;

use App\Models\Zona;
use Illuminate\Http\Request;

class ZonaController extends Controller
{
    public function index()
    {
        $zonas = Zona::withCount('propiedades')->get();
        return view('zonas.index', compact('zonas'));
    }

    public function create()
    {
        return view('zonas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
            'descripcion' => 'nullable|string'
        ]);

        Zona::create($validated);

        return redirect()->route('zonas.index')
            ->with('success', 'Zona creada exitosamente.');
    }

    public function edit(Zona $zona)
    {
        return view('zonas.edit', compact('zona'));
    }

    public function update(Request $request, Zona $zona)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
            'descripcion' => 'nullable|string'
        ]);

        $zona->update($validated);

        return redirect()->route('zonas.index')
            ->with('success', 'Zona actualizada exitosamente.');
    }

    public function destroy(Zona $zona)
    {
        $zona->delete();

        return redirect()->route('zonas.index')
            ->with('success', 'Zona eliminada exitosamente.');
    }
}