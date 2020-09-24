<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $materiales = Material::get();
        return view('materiales.index');//->with('materiales', $materiales);
    }

    public function create()
    {
        return view('materiales.create');
    }

    public function store(Request $request)
    {
        $material = new Pastel;
        $material->material = $request->input('material');
        $material->descripcion  = $request->input('descripcion');
        $material->grupoArticulos  = $request->input('grupoArticulos');

        $material->save();

        return redirect()->route('pasteles.index');
    }


}
