@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h2>Bienvenue sur le site de {{ $name }}</h2>

    @forelse ($articles as $article)
        @if ($loop->last)
            @break
        @endif
        <a href="{{ route('article.details', ['id' => $article->id]) }}">
            <x-article
                :title="$article->title"
                :description="$article->description"
            />
        </a>
    @empty
        <p>Aucun article disponible.</p>
    @endforelse
@endsection