@extends('layouts.entete')

@section('content')
<br>
<br>
<style>
    /* Styles pour diviser la page en trois colonnes */
    .container {
        display: flex;
        justify-content: space-between;
        width: 100%;
        text-align: center;
    }

    /* Styles pour les barres verticales rouges */
    .vertical-bar {
        width: 2px;
        background-color: red;
        height: 350px; /* Ajustez la hauteur selon vos besoins */
        margin: 0 auto;
    }
</style>

<div>
    <form method="POST" action="{{ route('opérateurs.store') }}">
        @csrf
        <fieldset>
            <legend>Enrégistrement des Transactions</legend>

            <input type="radio" name="type" id="Retrait" value="Retrait" />
            <label for="Retrait">Retrait</label>
            <input type="radio" name="type" id="Depot" value="Depôt" />
            <label for="Depot">Depôt</label><br /><br />

            <input type="radio" name="nom" id="TMoney" value="TMoney" />
            <label for="TMoney">TMoney</label>
            <input type="radio" name="nom" id="Flooz" value="Flooz" />
            <label for="Flooz">Flooz</label><br /><br />

            <label>Téléphone:</label>
            <input type="number" name="telephone" id="telephone" placeholder="Numéro de téléphone" required /><br/>

            <label>Montant:</label>
            <input type="number" name="montant" id="montant" placeholder="Entrer le montant" required /><br/>
            <br/>
            <br/>
            <button type="submit" class="btn btn-primary">Enrégistrer la Transaction</button>
            
        </fieldset>
    </form>
    <br />

    <hr />


    <br />
    <br />
    <br />
    <br />
    <br />
    <a href="{{ route('opérateurs.index') }}" class="btn btn-secondary">Afficher toutes les Transactions</a>
</div>
@endsection
