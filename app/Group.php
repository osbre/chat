<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['title', 'image'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function channels()
    {
        return $this->hasMany(Channel::class);
    }

    public function getLetterAttribute(): string
    {
        return $this->title[0] ?? '';
    }
}
