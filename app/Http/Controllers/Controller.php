<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Position;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function positionList() {
        $positions = Position::orderBy('name', 'asc')->get();
        $list = [];
        foreach($positions as $p) {
            $list[$p->id] = $p->name;
        }
        return $list;
    }

    protected function userList() {
        $users = User::orderBy('last_name', 'asc')->orderBy('first_name', 'asc')->get();
        $list = [];
        foreach($users as $u) {
            $list[$u->id] = $u->last_name . ' ' . $u->first_name;
        }
        return $list;
    }
}
