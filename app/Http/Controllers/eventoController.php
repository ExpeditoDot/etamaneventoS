<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\evento;

class eventoController extends Controller
{
    public function index()
    {
        $eventos = evento::all();

        return view('eventos.index', compact('eventos'));
    }
    public function create()
    {
        return view('eventos.create');
    }

    public function store(Request $request)
    {
        evento::create($request->all());

        return redirect()->route('eventos.index')->with('registrado','Evento criado e pronto para o mundo!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
