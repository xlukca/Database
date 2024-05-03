<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::withTrashed()->with('position')->orderBy('last_name', 'asc')->orderBy('first_name', 'asc')->paginate(10);

        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $create = true;

        return view('admin.users.upsert')->with('create', $create)->with('positionList', $this->positionList());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'first_name'      => 'required|string',
            'last_name'       => 'required|string',
            'email'           => 'required|email',
            'street'          => 'required|string',
            'street_number'   => 'required|string',
            'city'            => 'required|string',
            'postcode'        => 'required|string',
            'position_id'     => 'required|integer',
            'is_admin'        => 'required|integer',
        ];
        $validated = $request->validate($rules);

        try {
            $d = User::create([
                'first_name'      => $request['first_name'],
                'last_name'       => $request['last_name'],
                'email'           => $request['email'],
                'password'        => Hash::make(Str::random(8)),
                'street'          => $request['street'],
                'street_number'   => $request['street_number'],
                'city'            => $request['city'],
                'postcode'        => $request['postcode'],
                'position_id'     => $request['position_id'],
                'is_admin'        => $request['is_admin'],
            ]);
            session()->flash('success', __('users.created'));
            return redirect()->route('users.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $create = false;

        return view('admin.users.upsert')->with('user', User::find($id))
                                   ->with('create', $create)
                                   ->with('positionList', $this->positionList());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'first_name'      => 'required|string',
            'last_name'       => 'required|string',
            'email'           => 'required|email',
            'street'          => 'required|string',
            'street_number'   => 'required|string',
            'city'            => 'required|string',
            'postcode'        => 'required|string',
            'position_id'     => 'required|integer',
            'is_admin'        => 'required|integer',
        ];
        $validated = $request->validate($rules);

        $d = User::find($id);
        $d->first_name      = $request->first_name;
        $d->last_name       = $request->last_name;
        $d->email           = $request->email;
        $d->street          = $request->street;
        $d->street_number   = $request->street_number;
        $d->city            = $request->city;
        $d->postcode        = $request->postcode;
        $d->position_id     = $request->position_id;
        $d->is_admin        = $request->is_admin;

        try {
            $d->save();
            session()->flash('success', 'User was successfully updated.');
            return redirect()->route('users.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            User::find($id)->delete();
            session()->flash('success', 'User was temporarily deleted.');
            return redirect()->route('users.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }    
    }

    public function forceDestroy($id)
    {
        try {
            User::withTrashed()->find($id)->forceDelete();
            session()->flash('success', 'User was permanently deleted.');
            return redirect()->route('users.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }
    }

    public function restore($id)
    {
        try {
            User::withTrashed()->find($id)->restore();
            session()->flash('success', 'User was successfully restored.');
            return redirect()->route('users.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }
    }
}
