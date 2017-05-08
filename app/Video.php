<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['requirements','students','faculty_staff','community','alumni','purpose','use'];

}
