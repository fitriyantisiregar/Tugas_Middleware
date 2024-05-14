<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerConntroller extends Controller
{
    protected function create(array $data){

        return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'role' => $data['role'],
        ]);
    }
}
