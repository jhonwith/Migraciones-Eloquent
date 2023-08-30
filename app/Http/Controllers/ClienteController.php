<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente = cliente::all();
        return view('cliente',compact('cliente'));
        //$cliente=cliente::all();
        //return response()->json($cliente);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new cliente();
        $cliente->nombre=$request->nombre;
        $cliente->apellido= $request->apellido;
        $cliente -> telefono = $request -> telefono;
        $cliente -> save();
        $data = [
            'message'=>'cliente creado',
            'cliente' => $cliente
        ];
        return response()-> json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        return response()->json($cliente);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cliente $cliente)
    {
        $cliente -> nombre = $request->nombre;
        $cliente -> apellido = $request->apellido;
        $cliente -> telefono = $request ->telefono;
        $cliente-> save();
        $data=[
            'message'=>'cliente Actualizado!',
            'client'=>$cliente
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
        $cliente->delete();
        $data=
        [
            'message'=>'Eliminado!',
            'cliente'=>$cliente
        ];
        return response()->json($data);
    }
}
