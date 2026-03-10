<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        $articles = [
            [
                'title' => 'L’IA soigne mieux',
                'description' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.',
            ],
            [
                'title' => 'Villes vertes',
                'description' => 'Les métropoles deviennent plus écologiques et durables.',
            ],
            [
                'title' => 'Télétravail',
                'description' => 'Plus de liberté, mais aussi plus de solitude.',
            ],
        ];

        return view('welcome', [
            'name' => 'Abdel',
            'articles' => $articles,
        ]);
    }
}

