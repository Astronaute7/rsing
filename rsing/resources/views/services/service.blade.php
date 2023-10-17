@extends('layouts.entete')

@section('content')


    <title>page des services</title>
    <style>
        /* Styles pour le corps de la page */
        body {
            margin: 0;
            padding: 0;
        }

        /* Style pour la barre latérale */
        .sidebar {
            width: 250px; /* Largeur de la barre latérale */
            background-color: black; /* Fond noir */
            height: 100%; /* Hauteur pleine page */
            position: fixed; /* Position fixe */
            overflow: auto; /* Ajout d'un défilement si le contenu dépasse la hauteur */
        }

        /* Style pour les liens dans la barre latérale */
        .sidebar a {
            padding: 16px;
            text-decoration: none;
            font-size: 18px;
            color: blue; /* Texte bleu */
            display: block;
        }

        /* Changement de couleur de fond au survol des liens */
        .sidebar a:hover {
            background-color: white;
        }

        /* Style pour le contenu principal */
        .content {
            margin-left: 250px; /* Réserve l'espace pour la barre latérale */
            padding: 20px;
        }
    </style>


    <!-- Barre latérale -->
    <div class="sidebar">

        
        <a href="{{route('services.index')}}">Liste des services</a>
        <a href="{{route('services.create')}}">Ajouter un nouveau service</a>
    </div>

    <!-- Contenu principal -->
    <div class="content">
        <h1>page des services</h1>
        <p>Tout ce qui concerne les services.</p>

    </div>


@endsection
