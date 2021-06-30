<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subscribedsong extends Model
{
    protected $fillable = ['user_id','song_id'];
}
