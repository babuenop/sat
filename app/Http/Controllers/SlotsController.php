<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slot;

class SlotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slots = Slot::all();
        return view('slots.index', compact('slots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'serie'=>'required',
            'posicionGic'=>'required'
        ]);
        $Slot = new Slot([
            'id' => $request->get('id'),
            'serie' => $request->get('serie'),
            'posicionGic' => $request->get('posicionGic'),
            'fabricante' => $request ->get('fabricante'),
            'sociedad' => $request ->get('sociedad'),
            'mueble' => $request ->get('mueble'),
            'modelo' => $request ->get('modelo'),
            'estado' => $request ->get('estado'),
            'fechaFabricacion' => $request ->get('fechaFabricacion'),
            'centro' => $request ->get('centro'),
            'subdivision' => $request ->get('centro'),
            'participado' => $request ->get('participado'),
            'fechaDeIngreso' => $request ->get('fechaDeIngreso'),
            'fechaDeSalida' => $request ->get('fechaDeSalida'),
            'origen' => $request ->get('origen'),
            'destino' => $request ->get('destino'),
        ]);
        $Slot->save();
        return redirect('/slots')->with('success', 'Guardado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
