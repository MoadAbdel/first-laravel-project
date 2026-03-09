<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function show(int $id)
    {
        return "Article portant l’identifiant {$id}";
    }
}

