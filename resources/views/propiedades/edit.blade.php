@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <h2 class="text-2xl font-bold mb-6">Editar Propiedad</h2>

    <form action="{{ route('propiedades.update', $propiedad) }}" method="POST" class="bg-white rounded-lg shadow p-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="zona_id" class="block text-gray-700 font-medium mb-2">Zona *</label>
            <select name="zona_id" id="zona_id" 
                class="w-full px-3 py-2 border rounded-lg @error('zona_id') border-red-500 @enderror">
                <option value="">Seleccione una zona</option>
                @foreach($zonas as $zona)
                    <option value="{{ $zona->id }}" {{ old('zona_id', $propiedad->zona_id) == $zona->id ? 'selected' : '' }}>
                        {{ $zona->nombre }} - {{ $zona->ciudad }}
                    </option>
                @endforeach
            </select>
            @error('zona_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Resto del formulario similar al create pero con old('campo', $propiedad->campo) -->
        <div class="mb-4">
            <label for="direccion" class="block text-gray-700 font-medium mb-2">Dirección *</label>
            <input type="text" name="direccion" id="direccion" value="{{ old('direccion', $propiedad->direccion) }}"
                class="w-full px-3 py-2 border rounded-lg @error('direccion') border-red-500 @enderror">
            @error('direccion')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label for="precio_alquiler" class="block text-gray-700 font-medium mb-2">Precio Alquiler *</label>
                <input type="number" step="0.01" name="precio_alquiler" id="precio_alquiler" 
                    value="{{ old('precio_alquiler', $propiedad->precio_alquiler) }}"
                    class="w-full px-3 py-2 border rounded-lg @error('precio_alquiler') border-red-500 @enderror">
                @error('precio_alquiler')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="habitaciones" class="block text-gray-700 font-medium mb-2">Habitaciones *</label>
                <input type="number" name="habitaciones" id="habitaciones" 
                    value="{{ old('habitaciones', $propiedad->habitaciones) }}" min="1"
                    class="w-full px-3 py-2 border rounded-lg @error('habitaciones') border-red-500 @enderror">
                @error('habitaciones')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-4">
            <label class="flex items-center">
                <input type="checkbox" name="disponible" value="1" 
                    {{ old('disponible', $propiedad->disponible) ? 'checked' : '' }}
                    class="rounded border-gray-300 text-blue-600 shadow-sm">
                <span class="ml-2 text-gray-700">Disponible para alquiler</span>
            </label>
        </div>

        <div class="mb-6">
            <label for="descripcion" class="block text-gray-700 font-medium mb-2">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="3"
                class="w-full px-3 py-2 border rounded-lg">{{ old('descripcion', $propiedad->descripcion) }}</textarea>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('propiedades.index') }}" class="px-4 py-2 border rounded-lg hover:bg-gray-50">Cancelar</a>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                Actualizar Propiedad
            </button>
        </div>
    </form>
</div>
@endsection