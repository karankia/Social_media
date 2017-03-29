<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\Illuminate\Contracts\Auth\Authenticatable;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
