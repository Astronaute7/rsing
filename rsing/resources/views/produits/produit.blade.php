@extends('layouts.entete')

@section('content')

    <title>page des produits</title>
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
        <a href="{{ route('reçue') }}">Vendre un produit</a>
        <a href="{{ route('produits.index') }}"">Liste des produits</a>
        <a href="{{ route('produits.create') }}"">Ajouter un produit</a>
        <a href="{{ route('produits.inventaire') }}"">Faire l'inventaire</a>
    </div>

    <!-- Contenu principal -->
    <div class="content">
        <!-- Le contenu de votre site va ici -->
        <h1>page des produits</h1>
        <p>Tout ce qui concerne les produits.</p>
    </div>

@endsection
