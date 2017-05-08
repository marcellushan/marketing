<?php

namespace App\Http\Controllers;

use App\Presentation;
use Illuminate\Http\Request;

use Session;


class PresentationController extends BaseController
{
    const MEDIA_TYPE = 'presentation';
    const MODEL_NAME = 'Presentation';
    const SERVICE = 'presentation';


    public function store(Request $request)
    {
//                dd($request);
        $data = $request->all();
        $video = new Presentation($data);
        $video->fill($data);
        $video->save();
        Session::put('presentation',2);
        return redirect('service');
    }
}
