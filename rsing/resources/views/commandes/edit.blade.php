@extends('layouts.entete')

@section('content')
<br>
<br>
    <h2>Modifier la Commande</h2>

    <form method='POST' action="{{ route('commandes.update', $commande->id) }}">
        @csrf
        @method('PUT')
        
       
        @foreach($errors as $error)
            <p>{{$error}}</p>
        @endforeach

        <div class="form-group">
            <label for="id_service">Service:</label>
            <select name="id_service" id="id_service" class="form-control" required>
                @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->nom }}</option>
                @endforeach
            </select>
        </div>
        

        <div class="form-group">
            <label for="statut">Statut:</label>
            <select name="statut" id="statut" class="form-control" required>
                <option value="en cours" @if($commande->statut == 'en cours') selected @endif>En Cours</option>
                <option value="terminée" @if($commande->statut == 'terminée') selected @endif>Terminée</option>
                <option value="annulée" @if($commande->statut == 'annulée') selected @endif>Terminée</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nomClient">Nom du Client:</label>
            <input type="text" name="nomClient" id="nomClient" class="form-control" value="{{ $commande->nomClient }}" required>
        </div>

        <div class="form-group">
            <label for="telephoneClient">Téléphone du Client:</label>
            <input type="text" name="telephoneClient" id="telephoneClient" class="form-control" value="{{ $commande->telephoneClient }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="4" required>{{ $commande->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer les Modifications</button>
    </form>
    <a href="{{ route('commandes.index') }}" class="btn btn-secondary">Annuler</a>
@endsection
