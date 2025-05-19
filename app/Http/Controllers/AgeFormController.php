<?php

// app/Http/Controllers/AgeFormController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeFormController extends Controller
{
    public function showForm()
    {
        return view('age-form');
    }

    // Este método no se ejecuta directamente porque el middleware redirige
    public function processAge(Request $request)
    {
        return redirect('/');
    }
}

