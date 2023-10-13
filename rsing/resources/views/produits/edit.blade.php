@extends('layouts.app')

@section('content')
    <h2>Modifier le Produit</h2>

    <form method="POST" action="{{ route('produits.update', $produit->id) }}">
        @csrf
        @method('PUT')
        
        <label>Le nom du produit:</label>
        <input type="text" name="nom" id="nom" value="{{$produit->nom}}" required /><br/>

        <label>Prix Unitaire:</label>
        <input type="number" name="prixUnitaire" id="prixUnitaire" value="{{$produit->prixUnitaire}}" required /><br/>

        <label>Quantité En Stock:</label>
        <input type="number" name="quantitéEnStock" id="quantitéEnStock" value="{{$produit->quantitéEnStock}}" required /><br/>
        <br/>
        <br/>
       
        
        <button type="submit" class="btn btn-primary">Enregistrer les Modifications</button>
    </form>
    <a href="{{ route('produits.index') }}" class="btn btn-secondary">Annuler</a>
@endsection
