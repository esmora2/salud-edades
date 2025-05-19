<?php

namespace App\Http\Controllers\GrupoEtario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdultosController extends Controller
{
    public function index()
    {
        return view('grupos.adultos');
    }
}
