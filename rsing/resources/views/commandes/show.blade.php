@extends('layouts.app')

@section('content')
    <h2>Détails de la Commande</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Date: {{ $commande->date }}</h5>
            <p class="card-text"><strong>Statut:</strong> {{ $commande->statut }}</p>
            <p class="card-text"><strong>Nom du Client:</strong> {{ $commande->nomClient }}</p>
            <p class="card-text"><strong>Téléphone du Client:</strong> {{ $commande->telephoneClient }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $commande->description }}</p>
        </div>
    </div>

    <br />
    <a href="{{ route('commandes.index') }}" class="btn btn-secondary">Retour à la Liste des Commandes</a>
@endsection
