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
        return view('eklinik', ['article' => $article]);
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
