<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //afficher tous les services
        $services = Service::all();
        return view('services.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //affiche formulaire formulaire 
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Valider les données du formulaire ici si nécessaire
        $service = new Service;
        $service->nom = $request->input('nom');
        $service->prix = $request->input('prix');
        $service->description = $request->input('description');
        $service->save();

        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     */
    /*
    public function show(string $id)
    {
        //
        $service = Service::find($id);
        return view('services.edit', ['service' => $service]);
    }
*/
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $service = Service::find($id);
        return view('services.edit', ['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Valider les données du formulaire ici
    $request->validate([
        'nom' => 'required|string',
        'prix' => 'required|integer',
        'description' => 'required|string',
    ]);
    
    $service = Service::find($id);

    if (!$service) {
        return redirect()->route('services.index')->with('error', 'Service non trouvé.');
    }

    $service->nom = $request->input('nom');
    $service->prix = $request->input('prix');
    $service->description = $request->input('description');
    
    // Enregistrez les modifications dans la base de données
    $service->save();

    return redirect()->route('services.index')->with('success', 'Service mis à jour avec succès.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //

        $service->delete();

        return redirect()->route('services.index');
    }
}
