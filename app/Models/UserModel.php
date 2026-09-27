<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    // Menentukan nama tabel di database secara eksplisit
    protected $table = 'user'; 

    // Kolom yang diizinkan untuk diisi (Mass Assignment)
    protected $fillable = ['nama', 'nim', 'kelas_id']; 

    // Method untuk mendapatkan data user beserta nama kelas
    public function getUser()
    {
        return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                    ->select('user.*', 'kelas.nama_kelas as nama_kelas')
                    ->get();
    }
}