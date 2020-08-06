<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'string|required',
        ]);

        $group = auth()->user()->groups()->create($request->all());

        return redirect()->route('groups.show', $group);
    }

    public function show(Group $group)
    {
        return view('groups.show', [
            'group' => $group,
        ]);
    }
}
