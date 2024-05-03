<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = Position::withTrashed()->orderBy('name')->paginate(20);

        return view('positions.index')->with('positions', $positions);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $create = true;

        return view('positions.upsert')->with('create', $create);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name'  => 'required|string',
        ];
        $validated = $request->validate($rules);

        try {
            $d = Position::create([
                'name'  => $request['name'],
            ]);
            session()->flash('success', 'Position was created successfully');
            return redirect()->route('positions.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position)
    {
        $create = false;

        return view('positions.upsert')->with('position', Position::find($position->id))->with('create', $create);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Position $position)
    {
        $rules = [
            'name'  => 'required|string',
        ];
        $validated = $request->validate($rules);

        $d = Position::find($position->id);
        $d->name    = $request->name;

        try {
            $d->save();
            session()->flash('success', 'Position updated successfully');
            return redirect()->route('positions.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        try {
            $position->delete();
            session()->flash('success', 'Position was temporarily deleted');
            return redirect()->route('positions.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }    
    }

    public function forceDestroy($id)
    {
        try {
            Position::withTrashed()->find($id)->forceDelete();
            session()->flash('success', 'Position was permanently deleted');
            return redirect()->route('positions.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }
    }

    public function restore($id)
    {
        try {
            Position::withTrashed()->find($id)->restore();
            session()->flash('success', 'Position was restored successfully');
            return redirect()->route('positions.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }
    }
}
