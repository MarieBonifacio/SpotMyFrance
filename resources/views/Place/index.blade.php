@extends('layouts.app')


@section('content')
Je suis la vue de l'index des lieux

@foreach ($lieux as $unlieu)
    {{-- <div>
        <h1>{{$unlieu->name}}</h1>
    </div>
    Lien vers le lieu : <a href{{ route('place.show', $unlieu->id) }}>Lien</a> --}}
 
@endforeach
<div class="container_cat">
        <div class="grid">
            <div class="grid-item">
                <img id="taille" src="../img/p6.jpg" alt="img">
            </div>
            <div class="grid-item">
                <img id="taille" src="../img/p6.jpg" alt="img">
            </div>
            <div class="grid-item">
                <img id="taille" src="../img/p6.jpg" alt="img">
            </div>
            <div class="grid-item">
                <img id="taille" src="../img/p6.jpg" alt="img">
            </div>
            <div class="grid-item">
                <img id="taille" src="../img/p6.jpg" alt="img">
            </div>
            <div class="grid-item">
                <img id="taille" src="../img/p6.jpg" alt="img">
            </div>
            <div class="grid-item">
                <img id="taille" src="../img/p6.jpg" alt="img">
            </div>
            <div class="grid-item">
                <img id="taille" src="../img/p6.jpg" alt="img">
            </div>
            <div class="grid-item">
                <img id="taille" src="../img/p6.jpg" alt="img">
            </div>
            <div class="grid-item">
                <img id="taille" src="../img/p6.jpg" alt="img">
            </div>
            <div class="grid-item">
                <img id="taille" src="../img/p6.jpg" alt="img">
            </div>
            <div class="grid-item">
                <img id="taille" src="../img/p6.jpg" alt="img">
            </div>
            
        </div>
        <div class="cat">
            <div class="addi">
                <img class="icon" src="../img/add.png" alt="add">
                <p>Ajoutez un Spot</p>
            </div>
            <div class="btn_filter">
                <img class="icon" src="../img/add.png" alt="add">
                <p>Filtrez vos recherches</p>
            </div>
            <div class="filter">
                <div class="check">
                    <input type="checkbox" name="check" id="check">
                    <label for="check">Animaux autorisés</label>
                </div>
                <div>
                    <input type="checkbox" name="check" id="check">
                    <label for="check">Accessible poussettes et fauteuils</label>
                </div>
                <div>
                    <input type="checkbox" name="check" id="check">
                    <label for="check"></label>
                </div>
            </div>
        </div>
    </div>
@endsection

