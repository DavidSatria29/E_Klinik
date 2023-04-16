<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chat;




class AdminController extends Controller
{
    public function admin(){
        $users = User::all();
        $chats = Chat::all();
        return view('admin',compact ('users', 'chats'));
    }

    public function edit($user)
    {
        $user = User::where('name', $user)->first();
        return view('edit_create.useredit', compact('user'));
    }
    public function update(Request $request, $user)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'nomor' => 'required',
            'alamat' => 'required',
        ]);
    
        // Ambil data user yang ingin diedit berdasarkan $user
        $user = User::where('name', $user)->first();
    
        // Update data user
        $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'nomor' => $validatedData['nomor'],
            'alamat' => $validatedData['alamat'],
        ]);
    
        return redirect()->route('admin');
    }

    public function editchat($chat)
    {
        $chat = Chat::where('name', $chat)->first();
        return view('edit_create.chatedit', compact('chat'));
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
    
        return redirect()->route('admin');
    }


}
