@extends('layouts.app')

@section('title', 'Sub')

@section('content')
    <h2 class="text-2xl font-semibold">Bienvenido al apartado sub!</h2>
    <p>Hola amigo! Que es lo que deseas?</p>
    <ul>
        <li>Navegar a otro sitio</li>
        <li>Permanecer</li>
        <li>Hello!</li>
    </ul>
    <button type="button" id="btn-get-info" class="bg-blue-600 text-white font-semibold mt-5 py-2 px-4 rounded hover:bg-blue-700 transition duration-300 ">Obtener informacion</button>
    {{-- <script src="js/sub.js"></script> --}}
    @vite('resources/js/sub.js')
@endsection