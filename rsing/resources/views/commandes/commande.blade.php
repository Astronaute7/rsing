@extends('layouts.app')

@section('content')
<div>
    <form action="{{ route('commandes.store') }}" method="GET">
        @csrf
        <fieldset>
            <legend>Enregistrer une Commande</legend><br />
            <label>Statut de la commande:</label><br />
            <input type="radio" name="statut" id="en_cours" value="en cours" required /> <label for="en_cours">En Cours</label>
            <input type="radio" name="statut" id="terminee" value="terminée" required /> <label for="terminee">Terminée</label><br />
            <br />
            <label>Téléphone:</label> <input type="number" name="telephoneClient" id="telephoneClient" placeholder="Numéro du client" required /><br />

            <label>Nom:</label> <input type="text" name="nomClient" id="nomClient" placeholder="Nom du client" required /><br />
            <label>Description:</label> <textarea name="description" id="description" placeholder="Description de la commande" required></textarea><br /><br />

            <input type="submit" name="validation" value="Enregistrer la Commande" />
        </fieldset>
    </form>
</div>

<br />
<hr />

<div class="container">
    <table border="3">
        <caption>
            <h2>Liste de toutes les commandes</h2>
        </caption>
        <tr>
            <th>n°</th>
            <th>Téléphone</th>
            <th>Nom du Client</th>
            <th>Statut</th>
            <th>Description</th>
            <th>Date</th>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
    </table>
    <br />
    <br />
    <input type="submit" name="liste" href="{{route('commandes.index')}}" value="Afficher toutes les Commandes" />
</div>
@endsection
