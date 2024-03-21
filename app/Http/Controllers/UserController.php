<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Usermodel;
//use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//use Termwind\Components\Hr;

class Usercontroller extends Controller
{
    public function index()
    {
        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make(12345)
        ];
        Usermodel::create(data);

        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
      
        