<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Service;
use Illuminate\Support\Carbon;
class CommandeController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $commandes = Commande::all();
        return view('commandes.index', ['commandes' => $commandes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $services = Service::all(); // Récupérez tous les services disponibles

        return view('commandes.create', ['services' => $services]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        
        // Validez les données du formulaire ici si nécessaire
        $date = Carbon::parse(now());
        $formatDate = $date->format('Y-m-d H\hi');
        
        $request->validate([
            'statut' => 'required|string',
            'nomClient' => 'required|string',
            'telephoneClient' => 'required|string',
            'description' => 'required|string',
            'id_service' => 'required|exists:services,id', // Vérifie que l'ID du service existe dans la table 'services'
        ]);

        $commande = new Commande;

        $formatDate = $date->format('Y-m-d H\hi');
        $commande->date = $formatDate; // Utilisez la date et l'heure actuelles
        $commande->statut = $request->input('statut');
        $commande->nomClient = $request->input('nomClient');
        $commande->telephoneClient = $request->input('telephoneClient');
        $commande->description = $request->input('description');
        $commande->id_service = $request->input('id_service');
        $commande->save();

        return redirect()->route('commandes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $commande = Commande::find($id);
        return view('commandes.show', ['commande' => $commande]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    
        public function edit(string $id) {
            $services = Service::all();
            $commande = Commande::find($id);
            return view('commandes.edit', ['commande' => $commande, 'services'=>$services]);
        }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
{
    // Valider d'abord les données entrées par l'utilisateur
    $validatedData = $request->validate([
        'statut' => 'required|in:en cours,terminée',
        'nomClient' => 'required|string|max:40',
        'telephoneClient' => 'required|integer',
        'description' => 'required|string|max:255',
        'id_service' => 'required|exists:services,id', // Vérifie que l'ID du service existe dans la table 'services'
    ]);

    $commande = Commande::find($id);

    if (!$commande) {
        return redirect()->route('commandes.index')->with('error', 'Commande non trouvée.');
    }

    // Mettez à jour les attributs de la commande
    $commande->statut = $validatedData['statut'];
    $commande->nomClient = $validatedData['nomClient'];
    $commande->telephoneClient = $validatedData['telephoneClient'];
    $commande->description = $validatedData['description'];
    $commande->id_service = $request->input('id_service');


    $commande->save();

    return redirect()->route('commandes.index')->with('success', 'Commande mise à jour avec succès.');
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commande $commande)
    {
        //dd($commande);
        //$commande = Commande::find($id);
        $commande->delete();

        return redirect()->route('commandes.index');       
    }
}
