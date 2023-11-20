@extends('layouts.public.app')

@section('titulo')
    Editar datos del estudiante
@endsection

@section('contenido')
    <div class="container w-[90%] mx-auto mt-8">
        {{ Aire::open()->route('estudiantes.update', $estudiante)->method('put') }}
        <div class="grid grid-cols-3 gap-4">
            {{ Aire::input('nombre', 'Nombre')->value($estudiante->nombre)->addClass('mb-2 w-full') }}
            {{ Aire::input('apellido', 'Apellido')->value($estudiante->apellido)->addClass('mb-2 w-full') }}
            {{ Aire::input('cedula', 'Cédula')->value($estudiante->cedula)->addClass('mb-2 w-full') }}
            {{ Aire::input('email', 'Email')->value($estudiante->email)->addClass('mb-2 w-full') }}
            {{ Aire::input('telefono', 'Teléfono')->value($estudiante->telefono)->addClass('mb-2 w-full') }}
            {{ Aire::input('direccion', 'Dirección')->value($estudiante->direccion)->addClass('mb-2 w-full') }}
        </div>
        {{ Aire::select($carreras)->id('carrera')->name('carrera_id')->label('Carrera')->defaultValue($estudiante->carrera_id)->addClass('mb-2 w-full') }}
        <div class="flex gap-4">
            <a href="{{ route('estudiantes.index') }}"
                class="flex justify-center items-center w-[80px] h-[40px] bg-orange-400 hover:bg-orange-500 rounded text-white">
                Regresar
            </a>
            {{ Aire::submit('Actualizar')->addClass('bg-green-400 hover:bg-green-500 rounded text-white') }}
        </div>
        {{ Aire::close() }}
    </div>
@endsection