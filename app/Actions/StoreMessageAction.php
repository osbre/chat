<?php

namespace App\Actions;

use App\Channel;
use App\Events\NewMessage;
use App\Message;
use App\User;

final class StoreMessageAction
{
    public function handle(User $user, Channel $channel, array $data)
    {
        $message = new Message($data);
        $message->user()->associate($user);
        $message->channel()->associate($channel);
        $message->save();

        broadcast(new NewMessage($message));//->toOthers();

        return $message;
    }
}
