<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class LibroControll extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'isbn'=> 'required|min:13',
            'titulo'=> 'required|string',
            'autor'=> 'required|string|max:150',
            'paginas'=> 'required|integer',
            'año' => [ 'required','integer','digits:4','min:1000','max:' . Carbon::now()->year],
            'editorial'=> 'required|string',
            'emailEditorial'=>'required|email',
        ]);

        $libro = $request->input('titulo');

        session()->flash('exito', $libro);

        return to_route('registro.index');
    }
}
