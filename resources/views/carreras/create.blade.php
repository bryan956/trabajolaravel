@extends('layouts.public.app')

@section('titulo')
    Registro de carreras
@endsection

@section('contenido')
    <div class="container w-[90%] mx-auto mt-8">
        {{ Aire::open()->route('carreras.store') }}
        <div class="grid grid-cols-3 gap-4">
            {{ Aire::input('nombre', 'Nombre')->addClass('mb-2 w-full') }}
            {{ Aire::input('codigo', 'Código')->addClass('mb-2 w-full') }}
        </div>
        <div class="flex gap-4">
            <a href="{{ route('carreras.index') }}"
                class="flex justify-center items-center w-[80px] h-[40px] bg-orange-400 hover:bg-orange-500 rounded text-white">
                Regresar
            </a>
            {{ Aire::submit('Crear')->addClass('bg-green-400 hover:bg-green-500 rounded text-white') }}
        </div>
        {{ Aire::close() }}
    </div>
@endsection