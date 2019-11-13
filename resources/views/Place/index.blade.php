@extends('layouts.app')


@section('content')
Je suis la vue de l'index des lieux

@foreach ($lieux as $unlieu)
    {{$unlieu->name}}
    Lien vers le lieu : <a href{{ route('place.show', $unlieu->id) }}>Lien</a>
@endforeach

@endsection

