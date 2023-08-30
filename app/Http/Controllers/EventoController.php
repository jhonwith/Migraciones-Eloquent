<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\evento;
use App\Models\evento;
use Illuminate\Http\Request;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

    public function index()
    {
        //$evento=evento::get();
        //dd($evento);\
        //return view('evento',['evento'=>$evento]);
        $eventos = Evento::all(); // Recupera todos los eventos
    return view('eventostore', compact('eventos'));
    }

    public function create()
    {
        return view('eventocreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'numero_ticker' => 'required|string|max:255',
        ]);

        $evento = new evento();
        $evento->nombre = $request->nombre;
        $evento->numero_ticker = $request->numero_ticker;
        $evento->save();

        return redirect()->route('eventos.create')->with('success', 'Evento creado exitosamente');
    }

    
    public function show(evento $evento)
    {
        
    }

   
    public function edit(evento $evento)
    {
        return view('eventoeditar', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, evento $evento)
    {
        $evento->update($request->all());

    return redirect()->route('eventos.index')
        ->with('success', 'Evento actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
{
    return view('destroy', compact('evento'));
}

public function delete(Evento $evento)
{
    $evento->delete();

    return redirect()->route('eventos.index')
        ->with('success', 'Evento eliminado correctamente.');
}
}
