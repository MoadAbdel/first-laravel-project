<?php

namespace App\Http\Controllers;

use App\Models\Article;

class IndexController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('welcome', [
            'name' => 'Abdel',
            'articles' => $articles,
        ]);
    }
}

