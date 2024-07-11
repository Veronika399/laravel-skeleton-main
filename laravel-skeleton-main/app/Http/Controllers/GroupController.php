<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', ['groups' => $groups]);
    }

    public function edit(Group $group)
    {
        return view('groups.edit', ['group' => $group]);
    }


    public function update(Request $request, Group $group)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'active' => 'boolean',
        ]);
    
        $group->update($validatedData);
    
        return redirect()->route('groups.index')->with('success', 'Grupa je uspješno ažurirana!');
    }

    public function destroy(Group $group)
    {
        $group->delete();

        return redirect()->route('groups.index')->with('success', 'Grupa je uspješno izbrisana!');
    }

    public function create()
    {
        return view('groups.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'active' => 'boolean',
        ]);

        Group::create($validatedData);

        return redirect()->route('groups.index')->with('success', 'Grupa je uspješno stvorena!');
    }
    
}
