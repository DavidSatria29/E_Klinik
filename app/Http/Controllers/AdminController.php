<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;



class AdminController extends Controller
{
    public function admin(){
        $users = user::all();
        return view('admin',['users'=>$users]);
    }

    // public function edit(Request $request, $user){
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'nomor' => 'required|numeric',
    //         'alamat' => 'required|string|max:255',
    //     ]);
        
    //     // Ambil data user yang ingin diedit berdasarkan $user    
    //     $user = User::find($user);
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->nomor = $request->nomor;
    //     $user->alamat = $request->alamat;
    //     $user->save();
    
    //     // Return halaman edituser.blade.php dengan data user yang ingin diedit
    //     return redirect()->route('admin')->with('success', 'User data updated successfully');
    // }
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
    
    

    // public function edit(Request $request, $user) {
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'nomor' => 'required|numeric',
    //         'alamat' => 'required|string|max:255',
    //     ]);
    
    //     // Update data user
    //     $user->update([
    //         'name' => $validatedData['name'],
    //         'email' => $validatedData['email'],
    //         'nomor' => $validatedData['nomor'],
    //         'alamat' => $validatedData['alamat'],
    //     ]);
       
    
    //     // Return halaman edituser.blade.php dengan data user yang ingin diedit
    //     return redirect()->route('admin')->with('success', 'User data updated successfully');
    // }


}
