<!-- resources/views/age-form.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Edad</title>
</head>
<body>
    <h1>Bienvenido al Portal de Salud</h1>

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form action="{{ url('/procesar-edad') }}" method="POST">
        @csrf
        <label for="age">Ingrese su edad:</label><br>
        <input 
            type="number" 
            name="age" 
            id="age" 
            min="0" 
            max="120" 
            required 
            placeholder="Ej: 25"
        ><br><br>

        <button type="submit">Continuar</button>
    </form>
</body>
</html>
