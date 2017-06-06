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
    const MAIL = 'abstract';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME . '.clients_id', '=', 'clients.id')->orderby('status')->get();
        $receiveds= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME  .'.clients_id', '=', 'clients.id')->where('status', '=', '1')->get();
        $progresses= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME  .'.clients_id', '=', 'clients.id')->where('status', '=', '2')->get();
        $informations= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME  .'.clients_id', '=', 'clients.id')->where('status', '=', '3')->get();
        $reviews= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME  .'.clients_id', '=', 'clients.id')->where('status', '=', '4')->get();
        $completes= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME  .'.clients_id', '=', 'clients.id')->where('status', '=', '5')->get();
        $media_name = $this::MEDIA_NAME;
        $view_folder = $this::VIEW_FOLDER;
        return view('requests_list')->with(compact('datas','receiveds','progresses','informations', 'reviews', 'completes','media_name','view_folder'));
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
        $email = $this::VIEW_FOLDER;
        $service_type = new $model_name($data);
        $service_type->fill($data);
        $service_type->clients_id=Session::get('id');
        ($request->file('image') ? $service_type->image=URL::to('/') . "/uploads/" . $myPath : "");
        $service_type->save();
        $url = $this::VIEW_FOLDER . '/' . Session::get('id');
        $which_mail = '\\App\\Mail\\' . $this::MAIL;
        if($this::VIEW_FOLDER == 'design_printing') {
            $mailgroup = 'PRINTING';
        } elseif($this::VIEW_FOLDER == 'photography' || $this::VIEW_FOLDER == 'videography') {
            $mailgroup = 'GRAPHY';
        } elseif ($this::VIEW_FOLDER == 'event') {
            $mailgroup = 'EVERYONE';
        }  else {
            $mailgroup = 'MARKETING';
        }

        $to = explode(',', env($mailgroup));
        \Mail::to($to)
            ->cc('mhannah@highlands.edu')
            ->send(new $which_mail());
        Session::put($this::VIEW_FOLDER,2);
        return redirect($url);
//        return redirect('service');
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
//        dd($service_type);
        $comments = \App\Comments::where('services_id', '=', $service_type->id)->where('service', '=', $this::MODEL_NAME)->get();
        $view_folder = $this::VIEW_FOLDER;
        $service = $this::MODEL_NAME;
        $service_name = $this::MEDIA_NAME;
        switch ($service_type->status) {
            case 1:
                $status = 'Received';
                break;
            case 2:
                $status = 'In Progress';
                break;
            case 3:
                $status = 'Awaiting Information';
                break;
            case 4:
                $status = 'Awaiting Review';
                break;
            case 5:
                $status = 'Completed';
                break;
        }
//        dd($service_type);
        return view('client')->with(compact('service_type', 'service','comments','service_name','view_folder','status'));
//        return view('test.show')->with(compact('service_type', 'service','comments','service_name','view_folder'));
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin($id)
    {
        $model_name = $this::MODEL_NAME;
        $service_type = $model_name::where('clients_id', '=', $id)->first();
//        dd($service_type);
        $comments = \App\Comments::where('services_id', '=', $service_type->id)->where('service', '=', $this::MODEL_NAME)->get();
        $view_folder = $this::VIEW_FOLDER;
        $service = $this::MODEL_NAME;
        $service_name = $this::MEDIA_NAME;
        return view('admin')->with(compact('service_type', 'service','comments','service_name','view_folder'));
//        return view('test.show')->with(compact('service_type', 'service','comments','service_name','view_folder'));
    }
}
