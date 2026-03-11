@extends('layouts.app')

@section('title', "Détails de l'article {$article->id}")

@section('content')
    <x-article
        :title="$article->title"
        :description="$article->description"
    />
@endsection