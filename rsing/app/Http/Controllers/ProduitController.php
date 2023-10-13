<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $produits=Produit::All();
        return View('produits.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('produits.create')->with('success', 'produit enrégistré avec succès');;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

            $request->validate([
                
                'nom' => 'required|string|max:20',
                'prixUnitaire' => 'required|integer',
                'quantitéEnStock' => 'required|integer',
            ]);
    
            $produit = new Produit();
    
            $produit->nom = $request->input('nom');
            $produit->prixUnitaire = $request->input('prixUnitaire');
            $produit->quantitéEnStock = $request->input('quantitéEnStock');
            $produit->save();
    
            return redirect()->route('produits.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $produit = Produit::find($id);
        return view('produits.edit', ['produit' => $produit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData=$request->validate([
                
            'nom' => 'required|string|max:20',
            'prixUnitaire' => 'required|integer',
            'quantitéEnStock' => 'required|integer',
        ]);
        $produit = Produit::find($id);

        $produit->nom = $validatedData['nom'];
        $produit->prixUnitaire = $validatedData['prixUnitaire'];
        $produit->quantitéEnStock = $validatedData['quantitéEnStock'];

        $produit->save();
    
        return redirect()->route('produits.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        //
        $produit->delete();

        return redirect()->route('produits.index');
    }
}
