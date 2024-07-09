<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticia;

class controllerNoticias extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Noticia::all();
        return view('index', compact('dados'));
    }

}
