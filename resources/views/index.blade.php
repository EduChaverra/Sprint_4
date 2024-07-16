@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="bg-cover bg-center h-300" style="background-image: url('{{ asset('storage/index.jpg') }}');">
        <div class="bg-white bg-opacity-75 p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold mb-4">Bienvenido a GymClubs Connect</h1>
            <p class="text-gray-700">Aquí puedes gestionar los clubs, gimnastas y competiciones.</p>
        </div>
    </div>
    <!--
    <div class="mt-6">
        <a href="{{ route('clubs.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Crear Club
        </a>
        <a href="{{ route('gimnastas.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-4">
            Crear Gimnasta
        </a>
        <a href="{{ route('competiciones.create') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ml-4">
            Crear Competición
        </a>
    </div>
    -->
</div>
@endsection
