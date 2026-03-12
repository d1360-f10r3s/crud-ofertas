<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;
use app\Http\Controllers\Controller;

class OfertaController extends Controller
{
    public function index()
    {
        $ofertas=Oferta::all();
        return view('ofertas.oferta.index')->with('ofertas', $ofertas);
    }

    public function create()
    {
        return view('ofertas.oferta.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'id'=>'required',
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
        return view('ofertas.oferta.show')->with('oferta', $oferta);
    }

    public function edit(Oferta $oferta)
    {
        return view('ofertas.oferta.edit')->with('oferta', $oferta);
    }

    public function update(Request $request, Oferta $oferta)
    {
        $request->validate([
            // 'id'=>'required',
            'titulo'=>'required',
            'vigencia'=>'required',
            'tienda'=>'required',
            'precio_original'=>'required',
            'precio_descuento'=>'required',
        ]);

        $oferta->id=$request->id;
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
