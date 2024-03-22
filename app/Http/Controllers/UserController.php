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
        
        $user = UserModel::firstOrCreate(
            [
                'username' => 'manager',
                'nama' => 'manager',
                'level' => 'manager'
            ],
        );
        return view('user', ['data' => $user]);
    }
}
      
        