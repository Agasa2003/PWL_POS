<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        //tambah data user dengan Eloquent Model
        //$data = [
           // 'level_id' => 2,
            //'username' => 'manager_tiga',
            //'nama' => 'Manager 3',
            //'password' => Hash::make('12345')
        //];
        //UserModel::create($data);

        //coba akses model UserMoodel
        $user = UserModel::where('username', 'manager9')->firstOrFail(); //ambil semua data dari tabel m_user
        return view('user', ['data' => $user]);
}
}