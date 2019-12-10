@extends('layouts.app')
@section('content')

{{-- Page d'un lieu

Le nom d'un lieu : {{$lieu->name}}
Description : {{$lieu->description}}
Ville : {{$lieu->cities->name}}
Departement : {{$lieu->departments->name}}
Region : {{$lieu->regions->name}}
Créateur : {{$lieu->user->login}}  --}}

<div class="cont">
    <div class="carousel-lieu">
        <div class="carousel carousel-main" data-flickity='{"asNavFor": ".carousel-nav"}'>
            <div class="carousel-cell bis">
                <img class="imgbis" src="../img/p0.jpg" alt="paysage">
            </div>
            <div class="carousel-cell">
                <img class="imgbis" src="../img/p8.jpg" alt="paysage">
            </div>
            <div class="carousel-cell">
                <img class="imgbis" src="../img/p2.jpg" alt="paysage">
            </div>
        </div>
        <div class="carousel carousel-nav" data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false }'>
            <div class="carousel-cell">
            <img class="imgs" src="../img/p0.jpg" alt="paysage">
            </div>
            <div class="carousel-cell">
            <img class="imgs" src="../img/p8.jpg" alt="paysage">
            </div>
            <div class="carousel-cell">
            <img class="imgs" src="../img/p2.jpg" alt="paysage">
            </div>
        </div>
    </div>
    <div class="catbis">
    <div class="titlebis">
      <h1>{{$lieu->name}}</h1>
      <p>{{$lieu->cities->name}}</p>
      <p>{{$lieu->departments->name}}</p>
      <p>{{$lieu->regions->name}}</p>
    </div>
    <div class="textbis">{{$lieu->description}} </div>
    <div class="shares">
      <p><i class="fas fa-plus-circle adds"></i> Partagez vos photos</p>
    </div>
    <div class="commentairesbis">
      <p class="coms">commentaires :</p>
      <div class="peoplebis">
        <img class="picturebis" src="../img/p4.jpg" alt="img profil">
        <p>{{$lieu->user->login}} </p>
        <p>Super lieu, moi aussi, j'y vais régulièrement.</p>
        <div class="add-com">
      <p><i class="fas fa-plus-circle adds"></i> Commenter</p>
      <div class="filterbis">
            <div>
                <textarea name="comm" id="comm" cols="30" rows="5"></textarea>
            </div>
            <button class="le-button"type="submit">ok</button>
        </div>
    </div>
      </div>
    </div>
    </div>
</div>
@endsection