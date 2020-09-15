<?php

namespace App\Http\Controllers;

use App\slots;
use Illuminate\Http\Request;

class SlotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'serie'         =>  'required',
            'fabricante'    =>  'required',
            'posicionGic'   =>  'required',
            'sociedad'      =>  'required',
            'mueble'      =>  'required',
            'modelo'      =>  'required',
            'estado'      =>  'required',
            'fechaFabricacion'      =>  'required',
            'centro'      =>  'required',
            'subdivision'      =>  'required',
            'participado'      =>  'required',
            'fechaDeIngreso'      =>  'required',
            'fechaDeSalida'      =>  'required',
            'origen'      =>  'required',
            'destino'      =>  'required'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\slots  $slots
     * @return \Illuminate\Http\Response
     */
    public function show(slots $slots)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\slots  $slots
     * @return \Illuminate\Http\Response
     */
    public function edit(slots $slots)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\slots  $slots
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, slots $slots)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\slots  $slots
     * @return \Illuminate\Http\Response
     */
    public function destroy(slots $slots)
    {
        //
    }
}
