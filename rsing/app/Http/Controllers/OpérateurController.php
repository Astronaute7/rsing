<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Opérateur;

class OpérateurController extends Controller
{
    // Affiche la liste des opérateurs
    public function index()
    {
        $opérateurs = Opérateur::all();
        return view('opérateurs.index', compact('opérateurs'));
    }

    // Affiche le formulaire de création d'un opérateur
    public function create()
    {
        return view('opérateurs.create')->with('success', 'transaction enrégistré avec succès');;
    }

    // Traite la soumission du formulaire de création d'un opérateur
    public function store(Request $request)
    {

        $date = Carbon::parse(now());
        $formatDate = $date->format('Y-m-d H\hi');
        
        $request->validate([
            'type' => 'required|string|max:20',
            'nom' => 'required|string|max:20',
            'telephone' => 'required|integer',
            'montant' => 'required|integer',
            
            
            
        ]);

        $opérateur = new Opérateur;

        $formatDate = $date->format('Y-m-d H\hi');
        $opérateur->date = $formatDate; // Utilisez la date et l'heure actuelles de la transaction
        $opérateur->type = $request->input('type');
        $opérateur->nom = $request->input('nom');
        $opérateur->telephone = $request->input('telephone');
        $opérateur->montant = $request->input('montant');
        $opérateur->save();

        return redirect()->route('opérateurs.index');

    }

    // Affiche les détails d'un opérateur
    public function show(Opérateur $opérateur)
    {
        return view('opérateurs.show', compact('opérateur'));
    }

    // Affiche le formulaire d'édition d'un opérateur
    public function edit(string $id)
    {
        $opérateur = Opérateur::find($id);
        return view('opérateurs.edit', ['opérateur' => $opérateur]);
    }

    // Traite la soumission du formulaire d'édition d'un opérateur
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'montant' => 'required|integer',
            'type' => 'required|string|max:255',
            'telephone' => 'required|integer',
        ]);

        $opérateur = Opérateur::find($id);

        $opérateur->nom = $validatedData['nom'];
        $opérateur->montant = $validatedData['montant'];
        $opérateur->type = $validatedData['type'];
        $opérateur->telephone = $validatedData['telephone'];
        $opérateur->save();
    
        return redirect()->route('opérateurs.index');

        }
    

    // Supprime un opérateur
    public function destroy(Opérateur $opérateur)
    {
        $opérateur->delete();

        return redirect()->route('opérateurs.index')->with('success', 'transaction supprimé avec succès');
    }
}