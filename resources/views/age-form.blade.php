@extends('layouts.app')

@section('title', 'Formulario de Edad')

@section('content')
    <div class="card shadow mx-auto" style="max-width: 500px;">
        <div class="card-body">
            <h2 class="mb-4 text-center">Bienvenido al Portal de Salud</h2>

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ url('/procesar-edad') }}">
                @csrf

                <div class="mb-3">
                    <label for="age" class="form-label">Ingrese su edad:</label>
                    <input type="number" class="form-control" name="age" id="age" min="0" max="120" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Continuar</button>
            </form>
        </div>
    </div>
@endsection
