<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\Deskrisi_penyakit;



class DoctorController extends Controller
{
    public function doctor()
    {
        $chats = Chat::all();
        $penyakits = Deskrisi_Penyakit::all();


        return view('dokter.doctor', compact('chats', 'penyakits'));
        
    }

    public function editchat($chat)
    {
        $chat = Chat::where('name', $chat)->first();
        return view('edit_create.chat_dokter.chateditdoctor', compact('chat'));
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
        return redirect()->route('doctor')->with('success', "Data $chat berhasil di ubah");
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
            return redirect()->route('doctor')->with('success', "Data {$request->nama_penyakit} berhasil di buat");
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
        return redirect()->route('doctor')->with('success', "{$penyakits->nama_penyakit} berhasil di ubah");
    }

        public function deletepenyakit($penyakit)
        {
            $penyakit = Deskrisi_Penyakit::where('nama_penyakit', $penyakit)->first();
            return view('edit_create.penyakit.penyakitdelete', compact('penyakit'));
        }
        public function destroypenyakit(Deskrisi_Penyakit $penyakit)
        {
            $penyakit->delete();
            return redirect()->route('doctor')->with('success', "Data {$penyakit->nama_penyakit} berhasil di hapus");
        }
}
