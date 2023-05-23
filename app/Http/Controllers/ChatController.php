<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

// Khusus user untuk chat dokter
class ChatController extends Controller
{
    // Method ini mengembalikan view chat
    public function index()
    {
        return view('user.chat');
    }

    // Method ini melakukan validasi input dan membuat data chat baru berdasarkan data yang divalidasi
    public function store(Request $request)
    {
        // Validasi request user dengan menggunakan laravel validation
        $validateData = $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email',
                'question' => 'required|string'
            ],
            [
                'name.required' => 'Tulis namamu',
                'email.required' => 'email harus sama saat daftar',
                'email.email' => 'Tulis email menggunakan format yang valid',
                'message.required' => 'tulis pesanmu'
            ]
        );

        // mengirimkan requestan user dalam tabel chats pada database
        Chat::create($validateData);
        return redirect()->route('chat')
            ->with('success', "pesan anda telah terkirim");
    }

    public function showChat($chat)
    {
        // Mencari artikel dengan id yang sesuai pada database melalui model Article
        $value = Chat::where('email', $chat)->get();

        // Mengembalikan view infoArtikel.blade.php dengan membawa variabel $value
        return view('user.infoChat', ['chat' => $value]);
    }
}
