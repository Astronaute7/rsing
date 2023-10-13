@extends('layouts.app')

@section('content')
    <h2>Liste des Produits</h2>

    <table class="table table-striped">
        <tr>
            <th>N°</th>
            <th>Nom du Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Actions</th>
        </tr>
        @foreach ($produits as $produit)
            <tr>
                <td>{{ $produit->id }}</td>
                <td>{{ $produit->nom }}</td>
                <td>{{ $produit->prixUnitaire }}</td>
                <td>{{ $produit->quantitéEnStock }}</td>
                <td>
                    <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('produits.create') }}" class="btn btn-success">Ajouter un Produit</a>
@endsection
