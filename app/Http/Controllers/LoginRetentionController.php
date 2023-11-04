<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginRetention;

class LoginRetentionController extends Controller
{
    public function show($id) {

        $retentions = LoginRetention::where('user_id', $id)->orderBy('login_time', 'desc')->get();

        return view('admin.users.retentions.index')->with('retentions', $retentions);
    }
}
