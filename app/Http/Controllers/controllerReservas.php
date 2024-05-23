<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reserva;
use Illuminate\Http\Request;

class controllerReservas extends Controller
{
    /*Envia todos os dados para serem listados*/
    public function index() {
        $dados = Reserva::all();
        return view('Reservas/listarReservas', compact('dados'));
    }
}
