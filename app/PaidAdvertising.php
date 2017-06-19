<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaidAdvertising extends Model
{
    protected $fillable = ['ad_event','audience','purpose','advertisting','budget'];

}
