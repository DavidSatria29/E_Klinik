<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Deskrisi_Penyakit;

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

    // View untuk Home 
    public function index()
    {
        $deskripsiPenyakit = Deskrisi_Penyakit::all();
        $article = Article::all();
        return view('user.eklinik', ['article' => $article, 'deskripsiPenyakit' => $deskripsiPenyakit]);
    }

    public function about()
    {
        return view('user.about');
    }

    public function team()
    {
        return view('user.team');
    }

    public function service()
    {
        $deskripsiPenyakit = Deskrisi_Penyakit::all();
        return view('user.service', ['deskripsiPenyakit' => $deskripsiPenyakit]);
    }

    public function hubungi()
    {
        return view('user.hubungi');
    }

    public function artikel()
    {
        $article = Article::all();
        return view('user.testimonial', ['article' => $article]);
    }

    // Article Home
    public function show($article)
    {
        $value = Article::findOrFail($article);
        return view('article', ['article' => $value]);
    }

    // Deskripsi pemyakit  Home
    public function showDeskripsi($deskripsi)
    {
        $value = Deskrisi_Penyakit::findOrFail($deskripsi);
        return view('user.deskripsiPenyakit', ['deskripsi' => $value]);
    }

    // Contact Home
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        Contact::create($validateData);
        return redirect()->route('home')
            ->with('success', "pesan anda berhasil di kirim");
    }
}
