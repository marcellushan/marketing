<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaidAdvertising extends Model
{
    protected $fillable = ['ad_event','students','faculty_staff','community','alumni','purpose','details','social_media',
        'print','billboard','digital','other','budget'];

}
