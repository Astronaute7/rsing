



@extends('layouts.entete')

@section('content')

 <style>

        /* Styles pour définir la couleur de fond de la page */
        body {
            margin: 0; /* Réinitialiser les marges du corps de la page */
        }

        /* Styles pour diviser la page en trois colonnes */
        .container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            text-align: center;
        }

        /* Styles pour chaque colonne */
        .column {
            flex: 1;
        }

        /* Styles pour les barres verticales rouges */
        .vertical-bar {
            width: 2px;
            background-color: red;
            height: 350px; /* Ajustez la hauteur selon vos besoins */
            margin: 0 auto;
        }

        /* Styles pour les boutons en bleu */
        .blue-button {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        /* Styles pour les labels */
        .label {
            font-weight: bold;
            margin-bottom: 15mm; /* Espacement vertical de 2 cm entre les labels */
        }

        /* Style pour le paragraphe en haut de la page */
        .header-paragraph {
            text-align: center;
            margin-top: 20px;
        }
 </style>


<section data-bs-version="5.1" class="gallery3 cid-tPL4WGr4lG" id="gallery3-1">


    <div class="container-fluid">

		<div class="page-container">
			<div class="mbr-section-head">
		        <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
		            <strong>Vente de tickets</strong></h4>
		        <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Cliquer pour incrémenter</h5>
		    </div>
		    <br/>
			<div class="container">
				<div class="column">
					<div class="label">Ticket : 50 francs</div>
					<div class="label" >Nombre en Stock :<span id="labelStock50">11</span> </div>
					<div class="label" >Nombre Vendu :<span id="labelVendu50">0</span></div>
					<button class="blue-button" id="b50">Ajouter une vente</button><br/><br/>
					<div class="label">Gains du Jour :<span id="labelgain50">0</span></div>
				</div>
				<div class="vertical-bar"></div>
				<div class="column">
					<div class="label">Ticket : 100 francs</div>
					<div class="label">Nombre en Stock :<span id="labelStock100">6</span> </div>
					<div class="label">Nombre Vendu :<span id="labelVendu100">0</span></div>
					<button class="blue-button" id="b100">Ajouter une vente</button><br/><br/>
					<div class="label">Gains du Jour :<span id="labelgain100">0</span></div>
				</div>

				<div class="vertical-bar"></div>

				<div class="column">
					<div class="label">Ticket : 200 francs</div>
					<div class="label">Nombre en Stock :<span id="labelStock200">8</span> </div>
					<div class="label">Nombre Vendu : <span id="labelVendu200">0</span></div>
					<button class="blue-button"  id="b200">Ajouter une vente</button><br/><br/>
					<div class="label" >Gains du Jour :<span id="labelgain200">0</span> </div>
				</div>
			</div>
		</div>
    </div>
</section>




<script>
/*

//Variables à stocker dans la base pour cohérence
    let NombreEnStock = 0;
    let NombreVendu = 0;
    let GainsduJour = 0;
*/
    //
    const bouton50 = document.getElementById("b50");
    const bouton100 = document.getElementById("b100");
    const bouton200 = document.getElementById("b200");

    //ticket de 50 francs
    bouton50.addEventListener('click',function(e){

    //vérifie que le nombre de ticket n'est pas égal à 0
        if (parseInt(document.getElementById("labelStock50").innerText)==0) {
            //si oui il affiche un message
            alert("Les tickets de 50 francs sont fini");
        } else {
            //si non, il décrémmente le nombre
            document.getElementById("labelStock50").innerText-=1;
            document.getElementById("labelVendu50").innerText= parseInt(document.getElementById("labelVendu50").innerText) + 1;

            document.getElementById("labelgain50").innerText= parseInt(document.getElementById("labelgain50").innerText)+50 + " francs";
        }

    });



    //ticket de 100 frans
    bouton100.addEventListener('click',function(e){

    //vérifie que le nombre de ticket n'est pas égal à 0
        if (parseInt(document.getElementById("labelStock100").innerText)==0) {
            //si oui il affiche un message
            alert("Les tickets de 100 francs sont fini");
        } else {
            //si non, il décrémmente le nombre de ticket
            document.getElementById("labelStock100").innerText-=1;
            document.getElementById("labelVendu100").innerText= parseInt(document.getElementById("labelVendu100").innerText) + 1;

            document.getElementById("labelgain100").innerText= parseInt(document.getElementById("labelgain100").innerText)+100 + " francs";
        }

    });


    //bouton de 200 francs le ticket

    bouton200.addEventListener('click',function(e){

    //vérifie que le nombre de ticket n'est pas égal à 0
        if (parseInt(document.getElementById("labelStock200").innerText)==0) {
            //si oui il affiche un message
            alert("Les tickets de 200 francs sont fini");
        } else {
            //si non, il décrémmente le nombre
            document.getElementById("labelStock200").innerText-=1;
            document.getElementById("labelVendu200").innerText= parseInt(document.getElementById("labelVendu200").innerText) + 1;

            document.getElementById("labelgain200").innerText= parseInt(document.getElementById("labelgain200").innerText)+200 + " francs";
        }

    });
</script>

@endsection