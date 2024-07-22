@extends('layouts.app')

@section('content')
<style>
    .foto-index {
        background-image: url('{{ asset('storage/index.jpeg') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        min-height: calc(100vh - 4rem);
    }

    .content-overlay {
        position: absolute; 
        top: 50%; 
        left: 30%; 
        transform: translate(-50%, -50%);
        background-color: rgba(255, 255, 255, 0.75);
        padding: 20px;
        max-width: 90%;
        text-align: center;
        border-radius: 8px;
    }
</style>

<div class="foto-index">
    <div class="content-overlay">
        <h1 class="text-4xl font-bold mb-4">Bienvenido a GymClubs Connect</h1>
        <p class="text-gray-700">Aquí puedes gestionar clubs, gimnastas y competiciones.</p>
    </div>
</div>
@endsection