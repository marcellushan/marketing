<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class ServiceController extends Controller
{

    public function index()
    {
        if(Session::get('press_release')==1) {
            return redirect('press_releases/create');
        }
    }
}
