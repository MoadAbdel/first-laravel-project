<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function seed(): void
    {
        Article::truncate();

        Article::create([
            'title' => 'L’IA soigne mieux',
            'description' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.',
        ]);

        Article::create([
            'title' => 'Villes vertes',
            'description' => 'Les métropoles deviennent plus écologiques et durables.',
        ]);

        Article::create([
            'title' => 'Télétravail',
            'description' => 'Plus de liberté, mais aussi plus de solitude.',
        ]);
    }

    public function create()
    {
        $this->seed();

        return 'Articles créés';
    }

    public function update(int $id)
    {
        $article = Article::findOrFail($id);

        $article->update([
            'title' => $article->title . ' (mis à jour)',
        ]);

        return 'Article mis à jour';
    }

    public function delete(int $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return 'Article supprimé';
    }

    public function show(int $id)
    {
        $article = Article::findOrFail($id);

        return view('pages.article-details', [
            'article' => $article,
        ]);
    }
}

