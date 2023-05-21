<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Deskrisi_Penyakit;

// semua yang ada disini untuk tampilan user yang berada di dalam halaman hoem

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
        // Mengambil semua deskripsi penyakit dan artikel yang tersedia pada database
        $deskripsiPenyakit = Deskrisi_Penyakit::all();
        $article = Article::all();

        // Mengembalikan view home.blade.php dengan membawa variabel $article dan $deskripsiPenyakit
        return view('user.home', ['article' => $article, 'deskripsiPenyakit' => $deskripsiPenyakit]);
    }

    // View untuk About Us
    public function about()
    {
        // Mengembalikan view about.blade.php
        return view('user.about');
    }

    // View untuk Team
    public function team()
    {
        // Mengembalikan view team.blade.php
        return view('user.team');
    }

    // View untuk Service
    public function service()
    {
        // Mengambil semua deskripsi penyakit yang tersedia pada database
        $deskripsiPenyakit = Deskrisi_Penyakit::all();

        // Mengembalikan view service.blade.php dengan membawa variabel $deskripsiPenyakit
        return view('user.service', ['deskripsiPenyakit' => $deskripsiPenyakit]);
    }

    // View untuk Hubungi Kami
    public function hubungi()
    {
        // Mengembalikan view hubungi.blade.php
        return view('user.hubungi');
    }

    // View untuk Artikel
    public function artikel()
    {
        // Mengambil semua artikel yang tersedia pada database
        $article = Article::all();

        // Mengembalikan view artikel.blade.php dengan membawa variabel $article
        return view('user.artikel', ['article' => $article]);
    }

    // Article Home
    public function show($article)
    {
        // Mencari artikel dengan id yang sesuai pada database melalui model Article
        $value = Article::findOrFail($article);

        // Mengembalikan view infoArtikel.blade.php dengan membawa variabel $value
        return view('user.infoArtikel', ['article' => $value]);
    }

    // Deskripsi Penyakit Home
    public function showDeskripsi($deskripsi)
    {
        // Mencari deskripsi penyakit dengan id yang sesuai pada database melalui model Deskrisi_Penyakit 
        $value = Deskrisi_Penyakit::findOrFail($deskripsi);

        // Mengembalikan view deskripsiPenyakit.blade.php dengan membawa variabel $value
        return view('user.deskripsiPenyakit', ['deskripsi' => $value]);
    }

    // Contact Home
    public function store(Request $request)
    {
        // Memvalidasi form input menggunakan Laravel validation
        $validateData = $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email',
                'message' => 'required|string'
            ],
            [
                'name.required' => 'Tulis namamu',
                'email.required' => 'Tulis emailmu',
                'email.email' => 'Tulis email menggunakan format yang valid',
                'message.required' => 'tulis pesanmu'
            ]
        );


        // Menambahkan data contact baru ke dalam database menggunakan model Contact
        Contact::create($validateData);

        // Mengarahkan pengguna kembali ke halaman home dengan pesan sukses melalui session flash message
        return redirect()->route('home')
            ->with('success', "pesan anda berhasil di kirim");
    }

    public function infoAlgoCF()
    {
        return view('user.infoTentangKami');
    }
}
