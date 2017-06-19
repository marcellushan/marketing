<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['details', 'location','use','requested_date','start_time','end_time'];
}
