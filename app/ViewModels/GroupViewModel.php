<?php

namespace App\ViewModels;

use App\Channel;
use App\Group;
use Spatie\ViewModels\ViewModel;

class GroupViewModel extends ViewModel
{
    public Group $group;
    public ?Channel $channel;

    public function __construct(Group $group, Channel $channel)
    {
        $this->group   = $group->load('channels');
        $this->channel = $channel;
    }

    public function messages()
    {
        return $this->channel
            ->load('messages.user:name,id')
            ->messages;
    }

    public function channel()
    {
        if (!$this->channel->exists) {
            return $this->group->channels->first();
        }

        return $this->channel;
    }
}
