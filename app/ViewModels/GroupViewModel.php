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
        $channel = $this->channel;

        if (!$channel->exists) {
            $channel = $this->group->channels->first();
        }

        return optional($channel)->messages;
    }
}
