@extends('layouts.entete')

@section('content')
<br>
<br>
    <h2>Créer un Nouveau Service</h2>

    <form method="POST" action="{{ route('services.store') }}">
        @csrf

        <div class="form-group">
            <label for="nom">Nom du Service:</label>
            <input type="text" name="nom" id="nomService" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="prix">Prix:</label>
            <input type="integer" name="prix" id="prix" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter un Service</button>
    </form>
    <a href="{{ route('services.index') }}" class="btn btn-secondary">Retour à la Liste des Services</a>
@endsection
