<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reçu de Vente</title>
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
        .content {
            width: 15cm; /* Largeur de 16 cm */
            background-color: white; /* Fond blanc à l'intérieur */
            text-align: center; /* Centre le contenu texte */
            padding: 10px; /* Espacement intérieur */
            display: flex;
            flex-direction: column; /* Afficher les éléments en colonne */
        }

        /* Style pour les labels en haut et en bas */
        .label {
            font-size: 1.5rem; /* Taille de police */
            margin-top: 20px; /* Marge supérieure */
        }

        /* Style pour la liste des produits */
        .product-list {
            margin-top: 20px; /* Marge supérieure */
            text-align: left; /* Alignement du texte à gauche */
        }

        /* Style pour chaque ligne de produit */
        .product-item {
            border: 1px solid black; /* Bordure noire */
            padding: 10px; /* Espacement intérieur */
            margin-top: 10px; /* Marge supérieure entre les produits */
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

        .button1 {
            font-size: 1.2rem; /* Taille de police du bouton */
            background-color: green; /* Couleur de fond du bouton */
            color: white; /* Couleur du texte du bouton */
            padding: 10px 20px; /* Espacement intérieur du bouton */
            border: none; /* Supprime la bordure du bouton */
            cursor: pointer; /* Curseur de souris en main */
            position: absolute; /* Position absolue par rapport au corps */
            bottom: 20px; /* Distance depuis le bas */
            left: 20px; /* Distance depuis la droite */
        }

        /* Style pour la section de total */
        .total-section {
            margin-top: 20px; /* Marge supérieure */
        }

        /* Style pour le total */
        .total {
            font-size: 1.5rem; /* Taille de police du total */
            font-weight: bold; /* Police en gras */
        }

        /* Style pour la section de remerciement */
        .thanks-section {
            margin-top: 20px; /* Marge supérieure */
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="en-haut">
            <label class="label">SING BUSINESS</label>
            <label class="numero">Vente n°:<span id="numero">000001</span></label>
            <label class="date">Date:<span id="date">09/10/2023</span></label>
        </div>

        <div class="product-list">
            <h2>Liste des Produits:</h2>
			<div class="product-item">
		        <ul id="listeProduits">
				    <li>
				        <label for="produit1">Nom :</label>
				        <select id="produit1">
				            <option value="Produit A">Produit A</option>
				            <option value="Produit B">Produit B</option>
				            <option value="Produit C">Produit C</option>
				        </select>
				        <label for="prix">PU :</label>
				        <label><span id="montant">0</span>fcfa</label>
						<label for="prix">Qté :<span id="quantité">0</span></label>
				        
				    </li>
				</ul>
			</div>

        </div>

        <div class="total-section">
            <h2>Total: <span class="total">001</span> fcfa</h2>
        </div>

        <div class="en-bas">
            <label class="label">Merci pour votre achat</label>
        </div>
    </div>
    <button class="button">Valider la vente</button>
    <button class="button1" onclick="ajouterProduit()">Ajouter Produit</button>

    <script>
        function ajouterProduit() {
            const listeProduits = document.querySelector('.product-list');
            const nouvelElementDiv = document.createElement('div');
            nouvelElementDiv.classList.add('product-item');

            const labelNom = document.createElement('label');
            labelNom.textContent = 'Nom: ';
            const spanNom = document.createElement('span');
            spanNom.textContent = 'Nouveau Produit';

            const labelPU = document.createElement('label');
            labelPU.textContent = 'PU: ';
            const spanPU = document.createElement('span');
            spanPU.textContent = '0 fcfa';

            const labelQté = document.createElement('label');
            labelQté.textContent = 'Qté: ';
            const spanQté = document.createElement('span');
            spanQté.textContent = '0';

            const labelMontant = document.createElement('label');
            labelMontant.textContent = 'Montant: ';
            const spanMontant = document.createElement('span');
            spanMontant.textContent = '0 fcfa';

            nouvelElementDiv.appendChild(labelNom);
            nouvelElementDiv.appendChild(spanNom);
            nouvelElementDiv.appendChild(labelPU);
            nouvelElementDiv.appendChild(spanPU);
            nouvelElementDiv.appendChild(labelQté);
            nouvelElementDiv.appendChild(spanQté);
            
            nouvelElementDiv.appendChild(labelMontant);
            nouvelElementDiv.appendChild(spanMontant);

            listeProduits.appendChild(nouvelElementDiv);
        }
    </script>
</body>
</html>
