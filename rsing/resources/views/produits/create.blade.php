nom' => 'required|string|max:20',
            'prixUnitaire' => 'required|integer',
            'quantitéEnStock'
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
                <form method="POST" action="{{ route('produits.store') }}">
                    @csrf
                    <fieldset>
                        <legend>Enrégistrement des produits</legend>
            <br/>

                        <label>Le nom du produit:</label>
                        <input type="text" name="nom" id="nom" placeholder="le nom" required /><br/>
            
                        <label>Prix Unitaire:</label>
                        <input type="number" name="prixUnitaire" id="prixUnitaire" placeholder="le prix du produit" required /><br/>
            
                        <label>Quantité En Stock:</label>
                        <input type="number" name="quantitéEnStock" id="quantitéEnStock" placeholder="la quantité" required /><br/>
                        <br/>
                        <br/>
                        <button type="submit" class="btn btn-primary">Enrégistrer le produit</button>
                        
                    </fieldset>
                </form>
                <br />
            
                <hr />
            
                <br />
                <br />
                <br />
                <a href="{{ route('produits.index') }}" class="btn btn-secondary">Afficher tous les produits</a>
            </div>
            @endsection
            