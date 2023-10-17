
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
    <form method="POST" action="{{ route('employé.store') }}">
        @csrf
        <fieldset>
            <legend>Enrégistrement d'un employé</legend>
<br/>

            <label>Le nom de l'employé:</label>
            <input type="text" name="name" id="nom" placeholder="le nom" required /><br/>

            <label>Le mail de l'employé:</label>
            <input type="email" name="mail" id="mail" placeholder="l'email" required /><br/>
            
            <label>Le mot de passe:</label>
            <input type="password" name="mdp" id="mdp" placeholder="mot de passe" required /><br/>

        </fieldset>
    </form>
    <br />

</div>
@endsection
