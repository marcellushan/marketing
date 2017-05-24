<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use URL;

class BaseController extends Controller
{
    const MEDIA_NAME = "abstract";
    const MODEL_NAME = 'abstract';
    const VIEW_FOLDER = 'abstract';
    const TABLE_NAME = 'abstract';


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME . '.clients_id', '=', 'clients.id')->orderby('status')->get();
        $recieveds= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME  .'.clients_id', '=', 'clients.id')->where('status', '=', '1')->get();
        $progresses= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME  .'.clients_id', '=', 'clients.id')->where('status', '=', '2')->get();
        $media_name = $this::MEDIA_NAME;
        $view_folder = $this::VIEW_FOLDER;
        return view('requests_list')->with(compact('datas','recieveds','progresses', 'media_name','view_folder'));
//        echo $this::TABLE_NAME;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this::VIEW_FOLDER . '.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('image')) {
            $file = $request->file('image');
            //Move Uploaded File
            $destinationPath = 'uploads';
            $myRandom = rand(1, 10000);
            $myPath = $myRandom . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $myPath);
        }
        $data = $request->all();
        $model_name = $this::MODEL_NAME;
        $service_type = new $model_name($data);
        $service_type->fill($data);
        $service_type->clients_id=Session::get('id');
        ($request->file('image') ? $service_type->image=URL::to('/') . "/uploads/" . $myPath : "");
        $service_type->save();
        Session::put($this::VIEW_FOLDER,2);
        return redirect('service');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_name = $this::MODEL_NAME;
        $service_type = $model_name::where('clients_id', '=', $id)->first();
        $comments = \App\Comments::where('services_id', '=', $service_type->id)->where('service', '=', $this::MODEL_NAME)->get();
        $service = $this::MODEL_NAME;
        $service_name = $this::MEDIA_NAME;
        return view($this::VIEW_FOLDER . '.show')->with(compact('service_type', 'service','comments','service_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
