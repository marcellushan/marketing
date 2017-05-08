<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['requirements', 'location','use','requested_date','start','end'];
}
