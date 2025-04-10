<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use App\Models\UserModel;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public $kelasModel;
    public $userModel;
    
    public function __construct() {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();

    }
    public function show($id){
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => 'Profile',
            'user' => $user,
        ];

        return view('profile', $data);
    }
    public function index()
     {
        $data = [
        'title' => 'Create User',
        'users' => $this->userModel->getUser(),
        ];
        
        return view('list_user', $data);
     }

    public function create(){

     {
        $kelasModel = new Kelas();

        $kelas = $kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);

     }
}

    public function store(Request $request){

    
        // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'npm' => 'required|string|max:255',
        'kelas_id' => 'required|integer',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk foto
    ]);

    // Meng-handle upload foto
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        // Menyimpan file foto di folder 'uploads'
        $fotoPath = $foto->move('upload/img', $foto->getClientOriginalName());
    } else {
        // Jika tidak ada file yang diupload, set fotoPath menjadi null atau default
        $fotoPath = null;
    }

    // Menyimpan data ke database termasuk path foto
    $this->userModel->create([
        'nama' => $request->input('nama'),
        'npm' => $request->input('npm'),
        'kelas_id' => $request->input('kelas_id'),
        'foto' => $fotoPath, // Menyimpan path foto
    ]);

    return redirect()->to('/user')->with('success', 'User berhasil ditambahkan');
}
}

