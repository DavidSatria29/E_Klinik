<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\Deskrisi_Penyakit;

// khusus untuk dokter

class DoctorController extends Controller
{
    public function doctor()
    {
        // Mengambil semua data chats dan deskrisi_penyakit
        $chats = Chat::all();
        $penyakits = Deskrisi_Penyakit::all();


        // Render view 'dokter.doctor' dengan menyertakan data-data yang diambil sebelumnya
        return view('dokter.doctor', compact('chats', 'penyakits'));
    }


    public function doctorchat()
    {
        $chats = Chat::all();
        return view('dokter.chat', compact('chats'));
    }
    public function doctorpenyakit()
    {
        $penyakits = Deskrisi_Penyakit::all();
        return view('dokter.penyakit', compact('penyakits'));
    }


    // Menampilkan form untuk mengedit chat dengan nama $chat

    public function editchat($chat)
    {
        // Mengambil chat dengan nama $chat
        $chat = Chat::where('name', $chat)->first();

        // Render view 'edit_create.chat_dokter.chateditdoctor' dengan menyertakan data dari chat yang didapatkan sebelumnya
        return view('edit_create.chat_dokter.chateditdoctor', compact('chat'));
    }

    // Memperbarui chat dengan nama $chat
    public function updatechat(Request $request, $chat)
    {
        // Validasi inputan dari form
        $validatedData = $request->validate(
            [
                'name' => 'required',
                'question' => 'required',
                'answer' => 'required',
                'name_doctor' => 'required',
            ],
            [
                'name.required' => 'Tulis namamu',
                'question.required' => 'Tulis pertanyaanmu',
                'answer.required' => 'Tulis jawaban dari dokter',
                'name_doctor.required' => 'tulis nama dokter yang menjawab'
            ]
        );

        // Mengambil chat dengan nama $chat
        $chat = Chat::where('name', $chat)->first();

        // Memperbarui data dari chat yang diambil dengan data validasi inputan
        $chat->update([
            'name' => $validatedData['name'],
            'question' => $validatedData['question'],
            'answer' => $validatedData['answer'],
            'name_doctor' => $validatedData['name_doctor'],
        ]);

        // Redirect kembali ke view 'doctor' dengan pesan sukses
        return redirect()->route('doctor')->with('success', "Data $chat->name berhasil di ubah");
    }

    // Penyakit
    // Method ini mengembalikan view penambahan penyakit baru
    public function createpenyakitdokter()
    {
        return view('edit_create.penyakitdokter.penyakitcreate');
    }

    public function storepenyakitdokter(Request $request)
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

    // Method ini melakukan validasi input dan membuat penyakit baru berdasarkan data yang divalidasi
    public function editpenyakit($penyakit)
    {
        $penyakit = Deskrisi_Penyakit::where('nama_penyakit', $penyakit)->first();
        return view('edit_create.penyakitdokter.penyakitedit', compact('penyakit'));
    }

    // Method ini melakukan validasi input, mengambil data penyakit berdasarkan nama penyakit, dan mengupdate data tersebut dengan data yang telah divalidasi
    public function updatepenyakit(Request $request, $penyakits)
    {
        $validatedData = $request->validate(
            [
                'nama_penyakit' => 'required',
                'icon' => 'required',
                'deskripsi' => 'required',
                'jurnal_referensi' => 'required',
            ],
            [
                'name_penyakit.required' => 'Tulis nama penyakit',
                'icon.required' => 'Tulis icon dari font awesome',
                'deskripsi.required' => 'Tulis deskripsi penyakit',
                'jurnal_refrensi.required' => 'tulis nama dokter yang menjawab'
            ]
        );
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


    // Method ini mengambil data penyakit berdasarkan nama penyakit dan merender view untuk konfirmasi penghapusan data tersebut
    public function deletepenyakit($penyakit)
    {
        $penyakit = Deskrisi_Penyakit::where('nama_penyakit', $penyakit)->first();
        return view('edit_create.penyakitdokter.penyakitdelete', compact('penyakit'));
    }

    // Method ini menghapus data penyakit yang telah ditentukan dan mengarahkan user kembali ke view 'doctor' dengan pesan sukses
    public function destroypenyakit(Deskrisi_Penyakit $penyakit)
    {
        $penyakit->delete();
        return redirect()->route('doctor')->with('success', "Data {$penyakit->nama_penyakit} berhasil di hapus");
    }
}
