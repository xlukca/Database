<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginRetention;
use App\Models\User;

class LoginRetentionController extends Controller
{
    public function index()
    {
        $user_retentions = User::orderBy('last_name', 'asc')->orderBy('first_name', 'asc')->get();

        return view('admin.users.retentions.index')->with('user_retentions', $user_retentions);
    }

    public function show($id) {

        $retentions = LoginRetention::where('user_id', $id)->orderBy('login_time', 'desc')->get();

        return view('admin.users.retentions.show')->with('retentions', $retentions);
    }
}
