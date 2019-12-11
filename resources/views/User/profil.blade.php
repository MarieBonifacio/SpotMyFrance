{{--Vue Profil utilisateur --}}
@extends('layouts.app')


@section('content')
<div class="container_cat">
    <div class="profil">
        <div>
          <img class ="img-prof" src="../img/p0.jpg" alt="l'image du profil">
          <!-- <img src="img/add.png" alt="modif infos"> -->
        </div>
</div>
<div class="infos-profil">
        <div>
            <p>Pseudo</p>
            <p>Adresse Mail</p>
            <p class="title">Déconnexion</p>
        </div>
</div>
<div class="grid-bis">
    <p class="title-spot">Mes Spots</p>
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
</div>

@endsection
