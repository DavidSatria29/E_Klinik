<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chat;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Deskrisi_Penyakit;



class AdminController extends Controller
{
    public function admin()
    {
        $users = User::all();
        $chats = Chat::all();
        $articles = Article::all();
        $contacts = contact::all();
        $penyakits = Deskrisi_Penyakit::all();

        return view('admin.admin', compact('users', 'chats', 'articles', 'contacts', 'penyakits'));
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

    public function adminpenyakit()
    {
        $penyakits = Deskrisi_Penyakit::all();
        return view('admin.penyakit', compact('penyakits'));
    }

    // USER
    public function edit($user)
    {
        $user = User::where('name', $user)->first();
        return view('edit_create.user.useredit', compact('user'));
    }
    public function update(Request $request, $user)
    {
        // Update data user
        User::where('name', $user)->firstOrFail()->update($request->validate([
            'name' => 'required',
            'email' => 'required',
            'nomor' => 'required',
            'role' => 'required',
            'alamat' => 'required',
        ]));

        return redirect()->route('admin')->with('success', "Data $user berhasil di ubah");
    }
    public function deleteuser($user)
    {
        $user = user::where('name', $user)->first();
        return view('edit_create.user.userdelete', compact('user'));
    }
    public function destroyuser(user $user)
    {
        $user->delete();
        return redirect()->route('admin')->with('success', "Data $user berhasil di hapus");
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
        return redirect()->route('admin')->with('success', "Chat $chat berhasil di ubah");
    }
    public function deletechat($chat)
    {
        $chat = chat::where('name', $chat)->first();
        return view('edit_create.chat_dokter.chatdelete', compact('chat'));
    }
    public function destroychat(chat $chat)
    {
        $chat->delete();
        return redirect()->route('admin')->with('success', "Data {$chat->name} berhasil di hapus");
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
        return redirect()->route('admin')->with('success', "Data {$request->title} berhasil di buat");
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
        return redirect()->route('admin')->with('success', "Data {$request->title} berhasil di ubah");
    }

    public function deletearticle($article)
    {
        $article = Article::where('id', $article)->first();
        return view('edit_create.artikel.articledelete', compact('article'));
    }
    public function destroyarticle(Article $article)
    {
        $article->delete();
        return redirect()->route('admin')->with('success', "Data {$article->title} berhasil di hapus");
    }






    // CONTACT
    public function editcontact($contact)
    {
        $contact = contact::where('name', $contact)->first();
        return view('edit_create.contactus.contactedit', compact('contact'));
    }
    public function updatecontact(Request $request, $contact)
    {
        contact::where('name', $contact)->firstOrFail()->update($request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]));

        return redirect()->route('admin')->with('success', "Data $contact berhasil di ubah");
    }
    public function deletecontact($contact)
    {
        $contact = contact::where('name', $contact)->first();
        return view('edit_create.contactus.contactdelete', compact('contact'));
    }
    public function destroycontact(contact $contact)
    {

        $contact->delete();
        return redirect()->route('admin')->with('success', "Data {$contact->name} berhasil di hapus");
    }



    
        // Penyakit
        public function createpenyakit()
        {
            return view('edit_create.penyakit.penyakitcreate');
        }
    
        public function storepenyakit(Request $request)
        {
            $validateData = $request->validate([
                'nama_penyakit' => 'required',
                'icon' => 'required',
                'deskripsi' => 'required',
                'jurnal_referensi' => 'required',

            ]);
            Deskrisi_Penyakit::create($validateData);
            return redirect()->route('admin')->with('success', "Data {$request->nama_penyakit} berhasil di buat");
        }
        public function editpenyakit($penyakit)
        {
            $penyakit = Deskrisi_Penyakit::where('nama_penyakit', $penyakit)->first();
            return view('edit_create.penyakit.penyakitedit', compact('penyakit'));
        }
    
        public function updatepenyakit(Request $request, $penyakits)
    {
        $validatedData = $request->validate([
            'nama_penyakit' => 'required',
            'icon' => 'required',
            'deskripsi' => 'required',
            'jurnal_referensi' => 'required',
        ]);
        // Ambil data chat yang ingin diedit berdasarkan $chat
        $penyakits = Deskrisi_Penyakit::where('nama_penyakit', $penyakits)->first();
        // Update data chat
        $penyakits->update([
            'nama_penyakit' => $validatedData['nama_penyakit'],
            'icon' => $validatedData['icon'],
            'deskripsi' => $validatedData['deskripsi'],
            'jurnal_referensi' => $validatedData['jurnal_referensi'],
        ]);
        return redirect()->route('admin')->with('success', "{$penyakits->nama_penyakit} berhasil di ubah");
    }
    
        public function deletepenyakit($penyakit)
        {
            $penyakit = Deskrisi_Penyakit::where('nama_penyakit', $penyakit)->first();
            return view('edit_create.penyakit.penyakitdelete', compact('penyakit'));
        }
        public function destroypenyakit(Deskrisi_Penyakit $penyakit)
        {
            $penyakit->delete();
            return redirect()->route('admin')->with('success', "Data {$penyakit->nama_penyakit} berhasil di hapus");
        }
    
}
