<?php

namespace App\Http\Controllers\GrupoEtario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BebesController extends Controller
{
    public function index()
    {
        return view('grupos.bebes');
    }
}
