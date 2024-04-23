<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Usermodel;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;
//use Termwind\Components\Hr;

class Usercontroller extends Controller
{
    public function index()
    {
        $data =[

            'nama' => 'Pelanggan Pertama',

        ];

        UserModel::where('username', 'customer-1')->update($data);
        
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
      
        