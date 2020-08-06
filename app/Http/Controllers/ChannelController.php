<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    public function store(Group $group, Request $request)
    {
        $request->validate(['title' => 'required']);

        $channel = $group->channels()->create($request->all());

        return redirect()->route('groups.channels.show', [
            'group'   => $group,
            'channel' => $channel,
        ]);
    }
}
