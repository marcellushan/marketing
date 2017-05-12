<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $fillable = ['media_type','students','faculty_staff','community','alumni',
        'facebook_text','twitter_text','image','purpose','name','email','phone','department','how','facebook','twitter','instagram','youtube'];

}
