@extends('layouts.app')


@section('content')
Je suis la vue de l'index des lieux

@foreach ($lieux as $unlieu)
    <div>
        <h1>{{$unlieu->name}}</h1>
    </div>
    Lien vers le lieu : <a href{{ route('place.show', $unlieu->id) }}>Lien</a>
@endforeach

@endsection

