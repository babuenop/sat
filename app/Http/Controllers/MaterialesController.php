<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materiales;

class MaterialesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $materiales = Material::get();
        $materiales= materiales::latest()->get();
        return view('materiales.index', [
            'materiales'=> $materiales
        ]);
    }

    public function create()
    {
        return view('materiales.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'material'      => 'required',
            'descripcion'      => 'required',
            'grupoArticulos'      => 'required',
        ]);

        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:8',
        // ]);
        materiales::create ([
                'material' => $request ->material,
                'descripcion' => $request ->descripcion,
                'grupoArticulos' => $request ->grupoArticulos,
        ]);
        return back();
    }


}
