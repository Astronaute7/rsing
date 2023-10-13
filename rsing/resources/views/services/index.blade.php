@extends('layouts.app')

@section('content')
    <h2>Liste des Services</h2>

    <table class="table table-striped">
        <tr>
            <th>N°</th>
            <th>Nom du Service</th>
            <th>Prix</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        @foreach ($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->nom }}</td>
                <td>{{ $service->prix }}</td>
                <td>{{ $service->description }}</td>
                <td>
                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('services.create') }}" class="btn btn-success">Ajouter un Service</a>
@endsection
