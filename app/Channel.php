<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Channel extends Model
{
    protected $fillable = ['title', 'group_id'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function getSlugAttribute(): string
    {
        return Str::slug($this->title);
    }
}
