<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\LikesAndComments;

class Story extends Model
{
    protected $fillable = ["user_id", "city", "title", "description", "images", "title_img", "private", "flags", "likes"];

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function userLike() {
        return $this->hasMany(LikesAndComments::class, 'story_id', 'id');
    }
}
