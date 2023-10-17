@extends('layouts.entete')

@section('content')
<br>
<br>
    <h2>Modifier le Service</h2>

    <form method="POST" action="{{ route('services.update', $service->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nomService">Nom du Service:</label>
            <input type="text" name="nom" id="nomService" class="form-control" value="{{ $service->nomService }}" required>
        </div>

        <div class="form-group">
            <label for="prix">Prix:</label>
            <input type="number" name="prix" id="prix" class="form-control" value="{{ $service->prix }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="4" required>{{ $service->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer les Modifications</button>
    </form>
    <a href="{{ route('services.index') }}" class="btn btn-secondary">Annuler</a>
@endsection
