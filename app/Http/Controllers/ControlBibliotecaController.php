<?php

namespace App\Http\Controllers;
use App\Models\ControlBiblioteca;
use Illuminate\Http\Request;

class ControlBibliotecaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biblioteca = ControlBiblioteca::all();
        return view('biblioteca.index', compact('biblioteca'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biblioteca.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bibliotecas = new ControlBiblioteca();
        $bibliotecas->libro = $request->libro;
        $bibliotecas->categoria = $request->categoria;
        $bibliotecas->autor = $request->autor;
        $bibliotecas->cantidad = $request->cantidad;
        $bibliotecas->precio = $request->precio;
        $bibliotecas->estado = $request->estado;

        $bibliotecas->save();
        return redirect()->route('biblioteca.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bibliotecas = ControlBiblioteca::findOrFail($id);
        return view ('biblioteca.edit', compact('bibliotecas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bibliotecas = ControlBiblioteca::findOrFail($id);
        $bibliotecas->libro = $request->libro;
        $bibliotecas->categoria = $request->categoria;
        $bibliotecas->autor = $request->autor;
        $bibliotecas->cantidad = $request->cantidad;
        $bibliotecas->precio = $request->precio;
        $bibliotecas->estado = $request->estado;

        $bibliotecas->save();
        return redirect()->route('biblioteca.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bibliotecas = ControlBiblioteca::findOrFail($id);
        $bibliotecas->delete();
        return redirect()->route('biblioteca.index');
    }
}
