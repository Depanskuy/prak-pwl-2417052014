<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas;

class UserController extends Controller
{
    public function index()
    {
        $userModel = new UserModel();
        $data = [
            'title' => 'List User',
            'users' => $userModel->getUser(),
        ];

        return view('list_user', $data); 
    }

    public function create()
    {
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas
        ];

       return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $userModel = new UserModel();

        $userModel->create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user');
    }
}