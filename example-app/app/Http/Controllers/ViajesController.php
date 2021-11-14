<?php

namespace App\Http\Controllers;

use App\Models\Viajes;
use Illuminate\Http\Request;

class ViajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     */
    public function store(Request $request)
    {
        $variable= new Viajes;
        $variable->id_viajes= $request->id_viajes;
        $variable->fecha= $request->fecha;
        $variable->id_destino= $request->id_destino;
        $variable->save();
        return $variable;
    }

    /**
     * Display the specified resource.
     *
     *
     */
    public function show(Viajes $viajes)
    {
        return Viajes::all();
    }

    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit(Viajes $viajes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request,$id_viajes)
    {
        $variable = Viajes::findOrFail($request->id_viajes);
        $variable->id_viajes = $request->id_viajes;
        $variable->fecha = $request->fecha;
        $variable->id_destino = $request->id_destino;
        $variable->save();
        return $variable;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request  $request)
    {
        $variable=Viajes::destroy($request->id_viajes);
        return $variable;
    }
}
