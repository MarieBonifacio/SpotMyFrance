@extends('layouts.app')

@section('content')
{{-- Page d'accueil

lien vers tt les lieux : <a href="{{route('place.index')}}">le lien</a> --}}
{{-- <!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/app.css">
  

  <script src="https://kit.fontawesome.com/d938b44c84.js" crossorigin="anonymous"></script>
  <title>Test Caroussel</title>
</head> --}}

{{-- <body> --}}
  <!-- <div class="preload">
    <div class="container_preload">
      <div class="text_preload">
        <h1>SpotMyFrance</h1>
      </div>
    </div>
  </div> -->

  <!-- Use Flickity carousel method -->
  <div class="carousel carousel-main" data-flickity>
    <div class="carousel-cell">

      <img class="img" src="img/p0.jpg" alt="paysage">

      <div class="container_infos_lieu">
        <div class="title">
          <h1>Le titre du lieu</h1>
          <p>La ville</p>
        </div>
        <div class="text"> PARFAIT ! Pour les amateurs de sport en plein air, courrir sur le sable mouiller...
          Quel pied pour se remettre en forme ! ( surtout avec un week-end bien chargé !
          Nous avons profiter de ce spot en famille, les enfants, mon mari, haddock ( notre labrador) et moi-même Nous sommes en forme pour affronter notre semaine !</div>
        <div class="share">
          <p><i class="fas fa-plus-circle add"></i> Partagez vos photos</p>
        </div>
        <div class="commentaires">
          <p>commentaires</p>
          <div class="people">
            <img class="picture" src="" alt="">
            <p>Marie</p>
            <p>Super lieu, moi aussi, j'y vais régulièrement.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="carousel-cell">
      <img src="img/p1.jpg" alt="paysage">

      <div class="container_infos_lieu">
        <div class="title">
          <h1>Le titre du lieu</h1>
          <p>La ville</p>
        </div>
        <div class="text"> PARFAIT ! Pour les amateurs de sport en plein air, courrir sur le sable mouiller...
          Quel pied pour se remettre en forme ! ( surtout avec un week-end bien chargé !
          Nous avons profiter de ce spot en famille, les enfants, mon mari, haddock ( notre labrador) et moi-même Nous sommes en forme pour affronter notre semaine !</div>
      </div>
    </div>

    <div class="carousel-cell">
      <img src="img/p2.jpg" alt="paysage">

      <div class="container_infos_lieu">
        <div class="title">
          <h1>Le titre du lieu</h1>
          <p>La ville</p>
        </div>
        <div class="text"> PARFAIT ! Pour les amateurs de sport en plein air, courrir sur le sable mouiller...
          Quel pied pour se remettre en forme ! ( surtout avec un week-end bien chargé !
          Nous avons profiter de ce spot en famille, les enfants, mon mari, haddock ( notre labrador) et moi-même Nous sommes en forme pour affronter notre semaine !</div>
      </div>
    </div>

    <div class="carousel-cell">
      <img src="img/p3.jpg" alt="paysage">
      <div class="container_infos_lieu">
        <div class="title">
          <h1>Le titre du lieu</h1>
          <p>La ville</p>
        </div>
        <div class="text"> PARFAIT ! Pour les amateurs de sport en plein air, courrir sur le sable mouiller...
          Quel pied pour se remettre en forme ! ( surtout avec un week-end bien chargé !
          Nous avons profiter de ce spot en famille, les enfants, mon mari, haddock ( notre labrador) et moi-même Nous sommes en forme pour affronter notre semaine !</div>
      </div>
    </div>
    <div class="carousel-cell">
      <img src="img/p4.jpg" alt="paysage">
      <div class="text"> PARFAIT ! Pour les amateurs de sport en plein air, courrir sur le sable mouiller...
        Quel pied pour se remettre en forme ! ( surtout avec un week-end bien chargé !
        Nous avons profiter de ce spot en famille, les enfants, mon mari, haddock ( notre labrador) et moi-même Nous sommes en forme pour affronter notre semaine !</div>
    </div>
    <div class="carousel-cell">
      <img src="img/p5.jpg" alt="paysage">
      <div class="text"> PARFAIT ! Pour les amateurs de sport en plein air, courrir sur le sable mouiller...
        Quel pied pour se remettre en forme ! ( surtout avec un week-end bien chargé !
        Nous avons profiter de ce spot en famille, les enfants, mon mari, haddock ( notre labrador) et moi-même Nous sommes en forme pour affronter notre semaine !</div>
    </div>
    <div class="carousel-cell">
      <img src="img/p6.jpg" alt="paysage">
      <div class="text"> PARFAIT ! Pour les amateurs de sport en plein air, courrir sur le sable mouiller...
        Quel pied pour se remettre en forme ! ( surtout avec un week-end bien chargé !
        Nous avons profiter de ce spot en famille, les enfants, mon mari, haddock ( notre labrador) et moi-même Nous sommes en forme pour affronter notre semaine !</div>
    </div>
    <div class="carousel-cell">
      <img src="img/p7.jpg" alt="paysage">
      <div class="text"> PARFAIT ! Pour les amateurs de sport en plein air, courrir sur le sable mouiller...
        Quel pied pour se remettre en forme ! ( surtout avec un week-end bien chargé !
        Nous avons profiter de ce spot en famille, les enfants, mon mari, haddock ( notre labrador) et moi-même Nous sommes en forme pour affronter notre semaine !</div>
    </div>
    <div class="carousel-cell">
      <img src="img/p8.jpg" alt="paysage">
      <div class="text"> PARFAIT ! Pour les amateurs de sport en plein air, courrir sur le sable mouiller...
        Quel pied pour se remettre en forme ! ( surtout avec un week-end bien chargé !
        Nous avons profiter de ce spot en famille, les enfants, mon mari, haddock ( notre labrador) et moi-même Nous sommes en forme pour affronter notre semaine !</div>
    </div>
    <div class="carousel-cell">
      <img src="img/p9.jpeg" alt="paysage">
      <div class="text"> PARFAIT ! Pour les amateurs de sport en plein air, courrir sur le sable mouiller...
        Quel pied pour se remettre en forme ! ( surtout avec un week-end bien chargé !
        Nous avons profiter de ce spot en famille, les enfants, mon mari, haddock ( notre labrador) et moi-même Nous sommes en forme pour affronter notre semaine !</div>
    </div>
  </div>

  <div class="carousel carousel-nav" data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false}'>
    <div class="carousel-cell">
      <img src="img/p0.jpg" alt="paysage">
    </div>
    <div class="carousel-cell">
      <img src="img/p1.jpg" alt="paysage">
    </div>
    <div class="carousel-cell">
      <img src="img/p2.jpg" alt="paysage">
    </div>
    <div class="carousel-cell">
      <img src="img/p3.jpg" alt="paysage">
    </div>
    <div class="carousel-cell">
      <img src="img/p4.jpg" alt="paysage">
    </div>
    <div class="carousel-cell">
      <img src="img/p5.jpg" alt="paysage">
    </div>
    <div class="carousel-cell">
      <img src="img/p6.jpg" alt="paysage">
    </div>
    <div class="carousel-cell">
      <img src="img/p7.jpg" alt="paysage">
    </div>
    <div class="carousel-cell">
      <img src="img/p8.jpg" alt="paysage">
    </div>
    <div class="carousel-cell">
      <img src="img/p9.jpeg" alt="paysage">
    </div>
  </div>


  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</body>

</html>

@endsection
