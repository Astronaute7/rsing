@extends('layouts.app')

@section('content')
    <h2>Créer une Nouvelle Commande</h2>

    <form method="POST" action="{{ route('commandes.store') }}">
        @csrf

        <div class="mb-3">
            <label for="statut">Statut:</label>
            <select name="statut" id="statut" class="form-control" required>
                <option value="en cours">En Cours</option>
                <option value="terminée">Terminée</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="nomClient">Nom du Client:</label>
            <input type="text" name="nomClient" id="nomClient" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="telephoneClient">Téléphone du Client:</label>
            <input type="number" name="telephoneClient" id="telephoneClient" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="id_service">Service:</label>
            <select name="id_service" id="id_service" class="form-control" required>
                @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->nom }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Créer la Commande</button>
    </form>
    <a href="{{ route('commandes.index') }}" class="btn btn-secondary">Retour à la Liste des Commandes</a>
@endsection
