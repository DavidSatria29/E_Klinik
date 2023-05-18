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
        $articles = Article::all();
        $contacts = contact::all();

        return view('admin.admin', compact('users', 'chats', 'articles', 'contacts'));
    }

    public function doctor()
    {
        $chats = Chat::all();
        return view('dokter.doctor', compact('chats'));
    }

    public function adminuser()
    {
        $users = User::all();
        return view('admin.adminuser', compact('users'));
    }

    public function adminchat()
    {
        $chats = Chat::all();
        return view('admin.adminchat', compact('chats'));
    }

    public function adminarticle()
    {
        $articles = Article::all();
        return view('admin.adminarticle', compact('articles'));
    }

    public function admincontact()
    {
        $contacts = Contact::all();
        return view('admin.admincontact', compact('contacts'));
    }

    // USER
    public function edit($user)
    {
        $user = User::where('name', $user)->first();
        return view('edit_create.user.useredit', compact('user'));
    }
    public function update(Request $request, $user)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'nomor' => 'required',
            'role' => 'required',
            'alamat' => 'required',
        ]);

        // Ambil data user yang ingin diedit berdasarkan $user
        $user = User::where('name', $user)->first();

        // Update data user
        $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'nomor' => $validatedData['nomor'],
            'role' => $validatedData['role'],
            'alamat' => $validatedData['alamat'],
        ]);

        return redirect()->route('admin');
    }
    public function deleteuser($user)
    {
        $user = user::where('name', $user)->first();
        return view('edit_create.user.userdelete', compact('user'));
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
        return view('edit_create.chat_dokter.chatedit', compact('chat'));
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
            'email' => $validatedData['email'],
            'question' => $validatedData['question'],
            'answer' => $validatedData['answer'],
            'name_doctor' => $validatedData['name_doctor'],
        ]);
        return redirect()->route('admin');
    }
    public function deletechat($chat)
    {
        $chat = chat::where('name', $chat)->first();
        return view('edit_create.chat_dokter.chatdelete', compact('chat'));
    }
    public function destroychat(chat $chat)
    {
        $chat->delete();
        return redirect()->route('admin');
    }




    // ARTICLE
    public function createarticle()
    {
        return view('edit_create.artikel.articlecreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'title' => 'required',
            'content' => 'required',
        ]);

        $input = $request->all();
        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path')->getClientOriginalExtension();
            $nama_image = 'artikel-' . time() . '.' . $image;
            $path = $request->file('image_path')->move(public_path('asset/img/artikel'), $nama_image);

            $input['image_path'] = $nama_image;
        }

        Article::create($input);

        return redirect()->route('admin');
    }
    public function editarticle($article)
    {
        $article = Article::where('id', $article)->first();
        return view('edit_create.artikel.articleedit', compact('article'));
    }

    public function updatearticle(Request $request, $article)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $input = $request->all();
        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path')->getClientOriginalExtension();
            $nama_image = 'artikel-' . time() . '.' . $image;
            $path = $request->file('image_path')->move(public_path('asset/img/artikel'), $nama_image);

            $input['image_path'] = $nama_image;
        }

        Article::findOrFail($article)->update($input);
        return redirect()->route('admin');
    }

    public function deletearticle($article)
    {
        $article = Article::where('id', $article)->first();
        return view('edit_create.artikel.articledelete', compact('article'));
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
        return view('edit_create.contactus.contactedit', compact('contact'));
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
        return view('edit_create.contactus.contactdelete', compact('contact'));
    }
    public function destroycontact(contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin');
    }
}
