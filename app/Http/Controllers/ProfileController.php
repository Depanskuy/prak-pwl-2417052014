<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function Profile($nama = "Syalvan Deva Adinata", $NPM = "2417052014", $kelas = "A")

    {
        $data = [
            'name' => $nama,
            'NPM' => $NPM,
            'kelas' => $kelas,
        ];
        return view('profile', compact('data'));
    }
}
