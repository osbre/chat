<?php

namespace App\Http\Controllers;

use App\Actions\StoreMessageAction;
use App\Channel;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Channel $channel, Request $request, StoreMessageAction $storeMessage)
    {
        $request->validate(['body' => 'string|required']);

        $message = $storeMessage->handle(auth()->user(), $channel, $request->all());

        // TODO: use json-resources
        return response()->json($message->withoutRelations()->toArray());
    }
}
