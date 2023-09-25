<?php

namespace App\Http\Controllers;

use App\Models\Etiqueta;
use Illuminate\Http\Request;

class EtiquetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etiquetas = Etiqueta::all();
        return view('etiquetas.index', compact('etiquetas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etiquetas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $etiqueta = new Etiqueta();

        $etiqueta->title = $request->title;
        $etiqueta->user_id = 1;

        $etiqueta->save();

        return redirect()->route('etiqueta.edit', $etiqueta)->with('info', 'La etiqueta se creó con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'user_id' => 'required|integer',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etiqueta $etiqueta)
    {

        return view('etiquetas.edit', compact('etiqueta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etiqueta $etiqueta)
    {
        $request->validate([
            'title' => 'required',
        ]);

        // $etiqueta->update($request->all());

        $etiqueta->update(['title' => $request->title]);

        // $etiqueta->title = $request->title;
        // $etiqueta->save();

        return redirect()->route('etiqueta.edit', $etiqueta)
            ->with('info', 'la etiqueta se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $etiqueta = Etiqueta::find($id);
        $etiqueta->delete();

        return redirect()->route('etiqueta.index')->with('info', 'la etiqueta se elimino con éxito');
    }
}
