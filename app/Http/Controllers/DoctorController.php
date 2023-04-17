<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;


class DoctorController extends Controller
{
    public function doctor()
    {
        $chats = Chat::all();

        return view('doctor', compact('chats'));
    }

    public function editchat($chat)
    {
        $chat = Chat::where('name', $chat)->first();
        return view('edit_create.chateditdoctor', compact('chat'));
    }
    public function updatechat(Request $request, $chat)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'question' => 'required',
            'answer' => 'required',
            'name_doctor' => 'required',
        ]);
        // Ambil data chat yang ingin diedit berdasarkan $chat
        $chat = Chat::where('name', $chat)->first();
        // Update data chat
        $chat->update([
            'name' => $validatedData['name'],
            'question' => $validatedData['question'],
            'answer' => $validatedData['answer'],
            'name_doctor' => $validatedData['name_doctor'],
        ]);
        return redirect()->route('doctor')->with('pesan', 'data berhasil di update');
    }
}
