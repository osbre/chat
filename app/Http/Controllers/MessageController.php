<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Channel $channel, Request $request)
    {
        $request->validate(['body' => 'string|required']);

        $message = new Message($request->all());
        $message->user()->associate(auth()->user());
        $message->channel()->associate($channel);
        $message->save();

        // TODO: use json-resources
        return response()->json($message->withoutRelations()->toArray());
    }
}
