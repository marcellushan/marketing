<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $fillable = ['details','media_type','students','faculty_staff','community','alumni',
        'facebook_text','twitter_text','image','name','email','phone','department','how','facebook','twitter','instagram','youtube'];

}
