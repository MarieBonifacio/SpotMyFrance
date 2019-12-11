{{-- Vue création lieu --}}

@extends('layouts.app')

@section('content')

<div class="main">
    <div class="left">
        <div class="formulaireleft">
            <div class="form-group">
                <label for="titlePlace"><span>Titre : </span></label>
                <input type="text" class="form-control" id="titrePlace">
            </div>
            <div class="form-group">
                <label for="descriptionPlace"><span> Description : </span></label>
                <textarea class="form-control" id="descriptionPlace"></textarea>
            </div>
            <label for="checkBox"><span>Dans quelles catégories rentre votre spot ?</span></label>
            <div class="check">
                <div class="checkMarcher">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Marcher
                    </label>
                </div>
                <div class="checkCourir">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                        Courir
                    </label>
                </div>
                <div class="checkLire">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                    <label class="form-check-label" for="defaultCheck3">
                        Lire
                    </label>
                </div>
                <div class="checkCeuillir">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                    <label class="form-check-label" for="defaultCheck4">
                        Ceuillir
                    </label>
                </div>
                <div class="checkExplorer">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                    <label class="form-check-label" for="defaultCheck5">
                        Explorer
                    </label>
                </div>
            
            </div>
        
        </div>
    </div>
    <div class="middle">
        <p>Ajouter votre spot !</p>
    <button>Ajoutez votre spot !</button>
    

    </div>
    <div class="right">
        <div class="mainRight">
            <div class="acces">
                <label for="acces"><span> Accès : </span></label>
                <input class="form-check-input" type="checkbox" value="" id="acces1">
                <label for=""> Poussettes </label>
                <input class="form-check-input" type="checkbox" value="" id="acces2">
                <label for="">Fauteuils roulants</label>
                <input class="form-check-input" type="checkbox" value="" id="acces3">
                <label for="">Animaux</label>

            </div>
            <div class="frequentation">
                <label for="frequentation"><span> Fréquentation : </span></label>
                <input class="form-check-input" type="checkbox" value="" id="frequentation1">
                <label for=""> Elevée </label>
                <input class="form-check-input" type="checkbox" value="" id="frequentation2">
                <label for="">Peu elevée</label>
                <input class="form-check-input" type="checkbox" value="" id="frequentation3">
                <label for="">Nulle</label>
            
            </div>
            <div class="geolocalisation">
                <label for="geo"><span> Me géolocaliser : </span></label>
                <input class="form-check-input" type="checkbox" value="" id="geo1">
                <label for=""> Oui </label>
                <input class="form-check-input" type="checkbox" value="" id="geo2">
                <label for="">Non</label>
            </div>
            <div class="adress">
                <label for=""><span>Adresse : </span></label>
                <input type="text" class="form-control">
            </div>
            <div class="pictures">
                <div class="dlPictures">
                    
                </div>
            
            </div>
        </div>

    </div>
</div>

@endsection