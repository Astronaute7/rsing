@extends('layouts.app')

@section('content')

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
<form action="" method="POST">
<fieldset>
<legend>Formulaire des transactions</legend>

<input type="radio" name="type" id="Retrait"/> <label for="Retrait">Retrait</label>
<input type="radio" name="type" id="Depôt"/> <label for="Depôt">Depôt</label><br/>
<br/>
<input type="radio" name="nom" id="TMoney"/> <label for="TMoney">TMoney</label>
<input type="radio" name="nom" id="Flooz"/> <label for="Flooz">Flooz</label><br/>
<br/>
<label>Téléphone:</label> <input type="number" name="Téléphone" id="Téléphone" placeholder="le numero de téléphone"/><br/>

<label>Montant:</label> <input type="number" name="Montant" id="montant" placeholder="Entrer le montant"/><br/>


<input type="submit" name="validation" value="Enrégistrer la Transaction"/>
</div>
<br/>

<hr/>



</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<input type="submit" name="liste" value="Afficher toutes les Transactions"/>


@endsection
