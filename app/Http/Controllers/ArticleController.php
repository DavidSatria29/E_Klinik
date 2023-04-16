<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::findOrFail();
        return view('eklinik', ['article' => $article]);
    }

    public function show()
    {
    }
}
