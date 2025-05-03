@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h2 class="text-2xl font-semibold">Bienvenido a tu panel</h2>
    <p>Este es el contenido principal de esta página.</p>
    <a href="{{ route('sub') }}" class="bg-blue-600 text-white font-semibold mt-5 py-2 px-4 rounded hover:bg-blue-700 transition duration-300 ">Dirigirnos a Sub</a>
@endsection
