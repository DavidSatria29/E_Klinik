<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $article = Article::all();
        return view('user.eklinik', ['article' => $article]);
    }

    public function about()
    {
        $article = Article::all();
        return view('user.about', ['article' => $article]);
    }

    public function team()
    {
        $article = Article::all();
        return view('user.team', ['article' => $article]);
    }

    public function service()
    {
        $article = Article::all();
        return view('user.service', ['article' => $article]);
    }

    public function hubungi()
    {
        $article = Article::all();
        return view('user.hubungi', ['article' => $article]);
    }

    public function testimoni()
    {
        $article = Article::all();
        return view('user.testimonial', ['article' => $article]);
    }

    public function show($article)
    {
        $value = Article::findOrFail($article);
        return view('article', ['article' => $value]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        Contact::create($validateData);
        return redirect()->route('home')
            ->with('pesan', "pesan anda telah terkirim");
    }
}
