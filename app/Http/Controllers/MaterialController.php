<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $materials = Material::all();
        return view('materiales.index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materiales.create');
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
            'material'=>'required',
            'descripcion'=>'required',
            'grupoArticulos'=>'required'
        ]);
        $Material = new Material([
            'material' => $request->get('material'),
            'descripcion' => $request->get('descripcion'),
            'grupoArticulos' => $request->get('grupoArticulos'),
        ]);
        $Material->save();
        return redirect('/materiales')->with('success', 'Material Guardado!');
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
        $material = Material::find($id);
        return view('materiales.edit', compact('material'));
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
        $request->validate([
            'material'=>'required',
            'descripcion'=>'required',
            'grupoArticulos'=>'required'
        ]);
        $material = Material::find($id);
        $material->material =  $request->get('material');
        $material->descripcion = $request->get('descripcion');
        $material->grupoArticulos = $request->get('grupoArticulos');
        $material->save();
        return redirect('/materiales')->with('success', 'Material actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Material = Material::find($id);
        $Material->delete();
        return redirect('/materiales')->with('success', 'Material Borrado!');
    }
}
