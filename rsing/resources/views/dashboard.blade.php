

<x-app-layout>
    <x-slot name="header">
        <style>
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
        </style>


        <!-- Barre latérale -->
        <div class="sidebar">
            <a href="{{route('accueil')}}">Accueil</a>
            <a href="{{route('employés.index')}}">liste des employés</a>
        </div>
    </x-slot>

</x-app-layout>