<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create() {
        $user = new User;
        $user->name = 'Lukas Lukca';
        $user->email = 'lukca.lukas@gmail.com';
        $user->password = bcrypt('password');
        $user->save();
    }
}
