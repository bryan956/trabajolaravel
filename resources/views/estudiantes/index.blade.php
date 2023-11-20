@extends('layouts.public.app')

@section('titulo')
    Registro de estudiantes
@endsection

@section('contenido')
    <div class="py-2 flex justify-center overflow-x-auto">
        <div class="flex justify-start w-[90%] pl-10">
            <a href="{{ route('estudiantes.create') }}"
                class="flex justify-center items-center w-[80px] h-[40px] bg-green-400 hover:bg-green-500 rounded text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Nuevo
            </a>
        </div>
    </div>

    <div class="pt-6 flex justify-center">

        <table class="w-[90%] table-auto rounded shadow-lg">

            <thead class="bg-gray-300 rounded">
                <tr>
                    <th class="py-2 px-4 border-b">Codigo Estudiante</th>
                    <th class="py-2 px-4 border-b">Nombre</th>
                    <th class="py-2 px-4 border-b">Apellido</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Teléfono</th>
                    <th class="py-2 px-4 border-b">Dirección</th>
                    <th class="py-2 px-4 border-b">Carrera</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr class="bg-white">
                        <td class="text-center">{{ $estudiante->id }}</td>
                        <td class="text-start">{{ $estudiante->nombre }}</td>
                        <td class="text-center">{{ $estudiante->apellido }}</td>
                        <td class="text-center">{{ $estudiante->email }}</td>
                        <td class="text-center">{{ $estudiante->telefono }}</td>
                        <td class="text-center">{{ $estudiante->direccion }}</td>
                        <td class="text-center">{{ $estudiante->carrera ? $estudiante->carrera->nombre : 'N/A' }}</td>
                        <td>
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('estudiantes.edit', $estudiante->id) }}"
                                    class="flex justify-center items-center m-2 w-[80px] h-[40px] bg-yellow-400 hover:bg-yellow-500 rounded text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                    Editar
                                </a>
                                <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="flex justify-center items-center mt-2 w-[80px] h-[40px] bg-orange-400 hover:bg-orange-500 rounded text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
