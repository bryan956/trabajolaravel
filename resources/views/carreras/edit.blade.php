@extends('layouts.public.app')

@section('titulo')
    Editar datos de la carrera
@endsection

@section('contenido')
    <div class="container w-[90%] mx-auto mt-8">
        {{ Aire::open()->route('carreras.update', $carrera)->method('put') }}
        <div class="grid grid-cols-3 gap-4">
            {{ Aire::input('nombre', 'Nombre')->value($carrera->nombre)->addClass('mb-2 w-full') }}
            {{ Aire::input('descripcion', 'Descripcion')->value($carrera->descripcion)->addClass('mb-2 w-full') }}
        </div>
        <div class="flex gap-4">
            <a href="{{ route('carreras.index') }}"
                class="flex justify-center items-center w-[80px] h-[40px] bg-orange-400 hover:bg-orange-500 rounded text-white">
                Regresar
            </a>
            {{ Aire::submit('Actualizar')->addClass('bg-green-400 hover:bg-green-500 rounded text-white') }}
        </div>
        {{ Aire::close() }}
    </div>
@endsection