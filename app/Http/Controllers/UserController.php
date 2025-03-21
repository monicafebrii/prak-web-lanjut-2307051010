<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use App\Models\UserModel;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){

        return view('create_user', [
            'kelas' => Kelas::all(),
        ]);
    }


    public function store(Request $request){

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);
    
        $user = UserModel::create($validatedData);
    
        $user->load('kelas');
    
        return view('profile', [
            'nama' => $user->nama,
            'npm' => $user->npm,
            'nama_kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
        ]);

        $data = [ 
            'nama' => $request->input('nama'), 
            'kelas' => $request->input('kelas'), 
            'npm' => $request->input('npm'), 
            ]; 

            return view('profile', $data);
    }
}
