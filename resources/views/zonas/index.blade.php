@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">Listado de Zonas</h2>
    <a href="{{ route('zonas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Nueva Zona
    </a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="min-w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nombre</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Ciudad</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Propiedades</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($zonas as $zona)
            <tr>
                <td class="px-6 py-4">{{ $zona->id }}</td>
                <td class="px-6 py-4">{{ $zona->nombre }}</td>
                <td class="px-6 py-4">{{ $zona->ciudad }}</td>
                <td class="px-6 py-4">{{ $zona->propiedades_count }}</td>
                <td class="px-6 py-4 space-x-2">
                    <a href="{{ route('zonas.edit', $zona) }}" class="text-blue-600 hover:text-blue-900">Editar</a>
                    <form action="{{ route('zonas.destroy', $zona) }}" method="POST" class="inline">
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