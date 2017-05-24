<?php

namespace App\Http\Controllers;

use App\Presentation;
use Illuminate\Http\Request;


use App\Comments;
use Session;
use DB;


class PresentationController extends BaseController
{
    const MEDIA_NAME = "Presentation";
    const MEDIA_TYPE = 'presentation';
    const MODEL_NAME = 'Presentation';
    const SERVICE = 'presentation';
    const TABLE_NAME = 'presentations';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        $datas= DB::table('presentations')->join('clients', 'presentations.clients_id', '=', 'clients.id')->get();
//        return view('presentation.list')->with(compact('datas'));
//    }


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
        $comments = Comments::where('services_id', '=', $presentation->id)->where('service', '=', 'Presentation')->get();
        $service = 'Presentation';
        return view('presentation.show')->with(compact('presentation', 'service','comments'));


    }
}
