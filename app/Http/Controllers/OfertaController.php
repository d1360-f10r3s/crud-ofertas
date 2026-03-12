<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfertaController extends Controller
{
    public function index()
    {
        $ofertas=Oferta::all();
        return view('ofertas.index')->with('ofertas', $ofertas);
    }

    public function create()
    {
        return view('ofertas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo'=>'required',
            'vigencia'=>'required',
            'tienda'=>'required',
            'precio_original'=>'required',
            'precio_descuento'=>'required',
        ]);

        $oferta= new Oferta();
        $oferta->id=$request->id;
        $oferta->titulo=$request->titulo;
        $oferta->vigencia=$request->vigencia;
        $oferta->tienda=$request->tienda;
        $oferta->precio_original=$request->precio_original;
        $oferta->precio_descuento=$request->precio_descuento;
        $oferta->save();

        return redirect()->route('ofertas.index');
    }

    public function show(Oferta $oferta)
    {
        return view('ofertas.show')->with('oferta', $oferta);
    }

    public function edit(Oferta $oferta)
    {
        return view('ofertas.edit')->with('oferta', $oferta);
    }

    public function update(Request $request, Oferta $oferta)
    {
        $request->validate([
            'titulo'=>'required',
            'vigencia'=>'required',
            'tienda'=>'required',
            'precio_original'=>'required',
            'precio_descuento'=>'required',
        ]);

        $oferta->titulo=$request->titulo;
        $oferta->vigencia=$request->vigencia;
        $oferta->tienda=$request->tienda;
        $oferta->precio_original=$request->precio_original;
        $oferta->precio_descuento=$request->precio_descuento;
        $oferta->save();

        return redirect()->route('ofertas.show', $oferta);
    }

    public function destroy(Oferta $oferta)
    {
        $oferta->delete();
        return redirect()->route('ofertas.index');
    }
}
