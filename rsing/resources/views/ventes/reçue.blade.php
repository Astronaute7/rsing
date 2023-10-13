@extends('layouts.app')

@section('content')



    <style>
        /* Styles pour le corps de la page */
        body {
            background-color: black; /* Fond noir */
            display: flex;
            flex-direction: column; /* Afficher les éléments en colonne */
            justify-content: center; /* Centre verticalement */
            align-items: center; /* Centre horizontalement */
            min-height: 100vh; /* Hauteur minimale de la fenêtre visible */
            margin: 0; /* Supprime les marges par défaut */
            position: relative; /* Pour positionner le bouton */
        }

        /* Styles pour la zone centrale */
        .content1 {
            width: 9cm; /* Largeur de 9 cm */
            height: 15cm; /* Hauteur de 15 cm */
            background-color: white; /* Fond blanc à l'intérieur */
            text-align: center; /* Centre le contenu texte */
            padding: 20px; /* Espacement intérieur */
            display: flex;
            flex-direction: column; /* Afficher les éléments en colonne */
            justify-content: space-between; /* Espacement égal entre les éléments */
        }

        /* Style pour les labels en haut et en bas */
        .label {
            font-size: 1.5rem; /* Taille de police */
            margin: 5cm 0; /* Marge supérieure et inférieure de 5 cm */
        }

        /* Style pour le bouton */
        .button {
            font-size: 1.2rem; /* Taille de police du bouton */
            background-color: green; /* Couleur de fond du bouton */
            color: white; /* Couleur du texte du bouton */
            padding: 10px 20px; /* Espacement intérieur du bouton */
            border: none; /* Supprime la bordure du bouton */
            cursor: pointer; /* Curseur de souris en main */
            position: absolute; /* Position absolue par rapport au corps */
            bottom: 20px; /* Distance depuis le bas */
            right: 20px; /* Distance depuis la droite */
        }

    </style>

    <div class="content1">
        <div class="en-haut">
            <label class="label">Sing BUSINESS</label>
        </div>
        <div class="en-bas">
            <label class="label">Merci pour votre achat</label>
        </div>
    </div>
    <button class="button">Valider la vente</button>



@endsection
