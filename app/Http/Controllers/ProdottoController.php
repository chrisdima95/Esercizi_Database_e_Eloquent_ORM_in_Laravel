<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdottoRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class ProdottoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodotti = Product::all();

        // Ritorna la view e mostra il messaggio di successo se presente in sessione
        return view('prodotti.index', compact('prodotti'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prodotti.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProdottoRequest $request)
    {
        // Dati già validati qui
        $data = $request->validated();

        // Salva il prodotto nel database
        Product::create($data);

        // Puoi fare un redirect o mostrare un messaggio di successo
        return redirect()->route('prodotti.lista')->with('success', 'Prodotto creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Dettagli prodotto con id: $id (simulazione)";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Form modifica prodotto con id: $id (simulazione)";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Aggiornamento prodotto con id: $id (simulazione)";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Eliminazione prodotto con id: $id (simulazione)";
    }
}
