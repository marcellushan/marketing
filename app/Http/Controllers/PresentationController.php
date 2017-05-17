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
        $request_type = new Presentation($data);
        $request_type->clients_id=Session::get('id');
        $request_type->fill($data);
        $request_type->save();
        Session::put('presentation',2);
        return redirect('service');
    }

    public function show($id)
    {
        $presentation = Presentation::where('clients_id', '=', $id)->first();
//        dd($press_release);
//        (@$data->pressRelease ? $press_release = $data->pressRelease : $press_release = '');
        return view('presentation.show')->with(compact('presentation'));
    }
}
