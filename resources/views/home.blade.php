@extends('layouts.app')

@section('content')
{{-- Page d'accueil

lien vers tt les lieux : <a href="{{route('place.index')}}">le lien</a> --}}

  <!-- Use Flickity carousel method -->
  <div class="carousel carousel-main" data-flickity>

    @foreach($lieux as $lieu)
    <div class="carousel-cell">
    <img class="img" src="img/places/{{$lieu->id}}/thumbnail/{{$lieu->photos->first()['name']}}" alt="paysage">

      <div class="container_infos_lieu">
        <div class="title">
          <h1>{{$lieu->name}}</h1>
          <p>{{$lieu->cities->name}}</p>
        </div>
        <div class="text">{{$lieu->description}}</div>
        <div class="share">
          <p><i class="fas fa-plus-circle add"></i> Partagez vos photos</p>
        </div>
        <div class="commentaires">
          <p>commentaires</p>
          <div class="people">
            <img class="picture" src="" alt="">
            <p>Marie</p>
            <p id="p-white">Super lieu, moi aussi, j'y vais régulièrement.</p>
          </div>
        </div>
      </div>
    </div>
  @endforeach
  </div>


  <div class="carousel carousel-nav" data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false}'>
    @foreach($lieux as $lieu)
    <div class="carousel-cell">
      <img src="img/places/{{$lieu->id}}/thumbnail/{{$lieu->photos->first()['name']}}" alt="paysage">
    </div>
    @endforeach
  </div>

@endsection
