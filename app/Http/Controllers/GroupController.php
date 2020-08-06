<?php

namespace App\Http\Controllers;

use App\{Channel, Group};
use App\ViewModels\GroupViewModel;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Group::class);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'string|required',
        ]);

        $group = auth()->user()->groups()->create($request->all());

        return redirect()->route('groups.show', $group);
    }

    public function show(Group $group, Channel $channel)
    {
        $viewModel = new GroupViewModel($group, $channel);

        return $viewModel->view('groups.show');
    }
}
