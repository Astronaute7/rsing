@extends('layouts.app')

@section('content')
    <h2>Liste des Commandes</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>N°</th>
                <th>Date</th>
                <th>Statut</th>
                <th>Nom du Client</th>
                <th>Téléphone du Client</th>
                <th>Description</th>
                <th>Service</th> <!-- Ajout de la colonne Service -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commandes as $commande)
            <tr>
                <td>{{ $commande->id }}</td>
                <td>{{ $commande->date }}</td>
                <td>{{ $commande->statut }}</td>
                <td>{{ $commande->nomClient }}</td>
                <td>{{ $commande->telephoneClient }}</td>
                <td>{{ $commande->description }}</td>
                <td>
                    @if($commande->service)
                        {{ $commande->service->nom }}
                    @else
                        Service non spécifié
                    @endif
                </td>
                <td>
                    <a href="{{ route('commandes.edit', $commande->id) }}" class="btn btn-warning">Modifier</a>
                    <form method="POST" action="{{ route('commandes.destroy', $commande->id) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('commandes.create') }}" class="btn btn-success">Créer une Nouvelle Commande</a>
@endsection
