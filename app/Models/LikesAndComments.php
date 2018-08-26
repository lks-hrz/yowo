<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LikesAndComments extends Model
{
    protected $fillable = ["user_id", "story_id", "hash"];
}
