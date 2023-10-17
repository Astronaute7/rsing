@extends('layouts.entete')

@section('content')
<br>
<br>
    <h2>Liste des transactions</h2>

    <table class="table table-striped">
        <tr>
            <th>N°</th>
            <th>Date</th>
            <th>Nom</th>
            <th>Type</th>
            <th>Téléphone</th>
            <th>Montant</th>
            <th>Actions</th>
        </tr>
        @foreach ($opérateurs as $opérateur)
            <tr>
                <td>{{ $opérateur->id }}</td>
                <td>{{ $opérateur->date }}</td>
                <td>{{ $opérateur->nom }}</td>
                <td>{{ $opérateur->type }}</td>
                <td>{{ $opérateur->telephone }}</td>
                <td>{{ $opérateur->montant }}</td>
                <td>
                    <a href="{{ route('opérateurs.edit', $opérateur->id) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('opérateurs.destroy', $opérateur->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('opérateurs.create') }}" class="btn btn-success">Enrégistrer une nouvelle transaction</a>
@endsection
