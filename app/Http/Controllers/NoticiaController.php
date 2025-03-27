<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    /**
     * Muestra una lista de noticias.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Obtener todas las noticias desde la base de datos
        $noticias = Noticia::all();

        // Pasar las noticias a la vista
        return view('noticias.index', compact('noticias'));
    }
}
