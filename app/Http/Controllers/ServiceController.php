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
        if(Session::get('design_printing')==1) {
            return redirect('design_printing/create');
        }
        if(Session::get('photography')==1) {
            return redirect('photography/create');
        }
        if(Session::get('videography')==1) {
            return redirect('videography/create');
        }
        if(Session::get('paid_advertising')==1) {
            return redirect('paid_advertising/create');
        }
        if(Session::get('presentation')==1) {
            return redirect('presentation/create');
        }

        return redirect('clients/' . Session::get('id'));
//        return redirect()->route('clients', [Session::get('id')]);
    }
}
