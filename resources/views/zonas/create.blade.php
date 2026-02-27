@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <h2 class="text-2xl font-bold mb-6">Crear Nueva Zona</h2>

    <form action="{{ route('zonas.store') }}" method="POST" class="bg-white rounded-lg shadow p-6">
        @csrf

        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-medium mb-2">Nombre *</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" 
                class="w-full px-3 py-2 border rounded-lg @error('nombre') border-red-500 @enderror">
            @error('nombre')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="ciudad" class="block text-gray-700 font-medium mb-2">Ciudad *</label>
            <input type="text" name="ciudad" id="ciudad" value="{{ old('ciudad') }}"
                class="w-full px-3 py-2 border rounded-lg @error('ciudad') border-red-500 @enderror">
            @error('ciudad')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="descripcion" class="block text-gray-700 font-medium mb-2">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="3"
                class="w-full px-3 py-2 border rounded-lg">{{ old('descripcion') }}</textarea>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('zonas.index') }}" class="px-4 py-2 border rounded-lg hover:bg-gray-50">Cancelar</a>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                Guardar Zona
            </button>
        </div>
    </form>
</div>
@endsection