<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class ChatController extends Controller
{
    public function index()
    {
        return view('user.chat');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'question' => 'required|string'
        ]);

        Chat::create($validateData);
        return redirect()->route('chat')
            ->with('pesan', "pesan anda telah terkirim");
    }
}
