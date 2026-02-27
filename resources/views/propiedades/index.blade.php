@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">Listado de Propiedades</h2>
    <a href="{{ route('propiedades.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Nueva Propiedad
    </a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="min-w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Zona</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Dirección</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Precio Alquiler</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Habitaciones</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Disponible</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($propiedades as $propiedad)
            <tr>
                <td class="px-6 py-4">{{ $propiedad->id }}</td>
                <td class="px-6 py-4">{{ $propiedad->zona->nombre }}</td>
                <td class="px-6 py-4">{{ $propiedad->direccion }}</td>
                <td class="px-6 py-4">${{ number_format($propiedad->precio_alquiler, 2) }}</td>
                <td class="px-6 py-4">{{ $propiedad->habitaciones }}</td>
                <td class="px-6 py-4">
                    @if($propiedad->disponible)
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">Sí</span>
                    @else
                        <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-sm">No</span>
                    @endif
                </td>
                <td class="px-6 py-4 space-x-2">
                    <a href="{{ route('propiedades.edit', $propiedad) }}" class="text-blue-600 hover:text-blue-900">Editar</a>
                    <form action="{{ route('propiedades.destroy', $propiedad) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Estás seguro?')">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection