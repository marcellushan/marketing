<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function services()
    {
        return $this->hasOne('App\Services');
    }
}
