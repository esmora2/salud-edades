@extends('layouts.app')

@section('title', 'Edad inválida')

@section('content')
    <div class="alert alert-warning text-center">
        <h2>Edad no válida</h2>
        <p>Por favor, ingresa una edad entre 0 y 120 años.</p>
        <a href="{{ url('/') }}" class="btn btn-secondary mt-3">Volver al formulario</a>
    </div>
@endsection
