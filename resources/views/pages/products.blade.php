@extends('layout.index')

@section('content')
    @foreach ($section as $objet)
        @include('partials.service.card')
    @endforeach
@endsection