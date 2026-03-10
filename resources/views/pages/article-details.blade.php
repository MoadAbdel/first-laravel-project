@extends('layouts.app')

@section('title', "Détails de l'article #{$id}")

@section('content')
    <h2>Détails de l'article {{ $id }}</h2>
    <p>Article portant l'identifiant {{ $id }}</p>
@endsection