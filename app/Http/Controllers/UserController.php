<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Menggunakan Hash::make untuk meng-hash password
        $data = [
            'username' => 'customer-1',
            'name' => 'Pelanggan Pertama',
            'password' => Hash::make('12345'),
            'level_id' => 4
        ];

        // Insert data ke dalam tabel
        UserModel::insert($data);

        // Ambil semua data dari tabel UserModel
        $user = UserModel::all();

        // Kirim data ke view
        return view('user', ['data' => $user]);
    }
}