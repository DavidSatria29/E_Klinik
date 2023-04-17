<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chat;
use App\Models\Article;
use App\Models\Contact;


class AdminController extends Controller
{
    public function admin()
    {
        $users = User::all();
        $chats = Chat::all();
        $article = Article::all();
        $contact = contact::all();

        return view('admin', compact('users', 'chats', 'article', 'contact'));
    }


    // USER
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
            'alamat' => ['role'],
        ]);

        return redirect()->route('admin');
    }
    public function deleteuser($user)
    {
        $user = user::where('name', $user)->first();
        return view('edit_create.userdelete', compact('user'));
    }
    public function destroyuser(user $user)
    {
        $user->delete();
        return redirect()->route('admin');
    }


    // CHAT
    public function editchat($chat)
    {
        $chat = Chat::where('name', $chat)->first();
        return view('edit_create.chatedit', compact('chat'));
    }
    public function updatechat(Request $request, $chat)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'question' => 'required',
            'answer' => 'required',
            'name_doctor' => 'required',
        ]);
        // Ambil data chat yang ingin diedit berdasarkan $chat
        $chat = Chat::where('name', $chat)->first();
        // Update data chat
        $chat->update([
            'name' => $validatedData['name'],
            'name' => $validatedData['email'],
            'question' => $validatedData['question'],
            'answer' => $validatedData['answer'],
            'name_doctor' => $validatedData['name_doctor'],
        ]);
        return redirect()->route('admin');
    }
    public function deletechat($chat)
    {
        $chat = chat::where('name', $chat)->first();
        return view('edit_create.chatdelete', compact('chat'));
    }
    public function destroychat(chat $chat)
    {
        $chat->delete();
        return redirect()->route('admin');
    }




    // ARTICLE
    public function createarticle()
    {
        return view('edit_create.articlecreate');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'image_path' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        Article::create($validateData);

        return redirect()->route('admin');
    }
    public function editarticle($article)
    {
        $article = Article::where('id', $article)->first();
        return view('edit_create.articleedit', compact('article'));
    }

    public function updatearticle(Request $request, $article)
    {
        $validatedData = $request->validate([
            'image_path' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        // Ambil data article yang ingin diedit berdasarkan $article
        $article = Article::where('id', $article)->first();

        // Update data article
        $article->update([
            'image_path' => $validatedData['image_path'],
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
        ]);

        return redirect()->route('admin');
    }

    public function deletearticle($article)
    {
        $article = Article::where('id', $article)->first();
        return view('edit_create.articledelete', compact('article'));
    }
    public function destroyarticle(Article $article)
    {
        $article->delete();
        return redirect()->route('admin');
    }


    // CONTACT
    public function editcontact($contact)
    {
        $contact = contact::where('name', $contact)->first();
        return view('edit_create.contactedit', compact('contact'));
    }
    public function updatecontact(Request $request, $contact)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        // Ambil data contact yang ingin diedit berdasarkan $contact
        $contact = contact::where('name', $contact)->first();

        // Update data contact
        $contact->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
        ]);

        return redirect()->route('admin');
    }
    public function deletecontact($contact)
    {
        $contact = contact::where('name', $contact)->first();
        return view('edit_create.contactdelete', compact('contact'));
    }
    public function destroycontact(contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin');
    }
}
