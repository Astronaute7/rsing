@extends('layouts.entete')

@section('content')


<br>
<br>
    <h2>Inventaire</h2>

    <table class="table table-striped">
        <tr>
            
            <th>Nom du Produit</th>
            
            <th>Quantité en stock</th>
            
        </tr>
        @foreach ($produits as $produit)
            <tr>
                
                <td>{{ $produit->nom }}</td>
                
                <td>{{ $produit->quantitéEnStock }}</td>
                
            </tr>
        @endforeach
    </table>
    
@endsection
