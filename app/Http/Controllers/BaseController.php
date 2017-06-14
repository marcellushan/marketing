<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use URL;

use App\Clients;
use App\Comments;

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
        $receiveds= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME . '.clients_id', '=', 'clients.id')
            ->where($this::TABLE_NAME . '.status','=', 'Received')
            ->orderBy($this::TABLE_NAME  .'.created_at', 'desc')
            ->get();
        $progresses= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME . '.clients_id', '=', 'clients.id')
            ->where($this::TABLE_NAME . '.status','=', 'In Progress')
            ->orderBy($this::TABLE_NAME  .'.created_at', 'desc')
            ->get();
        $informations= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME . '.clients_id', '=', 'clients.id')
            ->where($this::TABLE_NAME . '.status','=', 'Awaiting Information')
            ->orderBy($this::TABLE_NAME  .'.created_at', 'desc')
            ->get();
        $reviews= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME . '.clients_id', '=', 'clients.id')
            ->where($this::TABLE_NAME . '.status','=', 'Awaiting Review')
            ->orderBy($this::TABLE_NAME  .'.created_at', 'desc')
            ->get();
        $completes= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME . '.clients_id', '=', 'clients.id')
            ->where($this::TABLE_NAME . '.status','=', 'Complete')
            ->orderBy($this::TABLE_NAME  .'.created_at', 'desc')
            ->get();
        $datas= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME . '.clients_id', '=', 'clients.id')
            ->orderBy($this::TABLE_NAME  .'.created_at', 'desc')
            ->get();
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
        $data = $request->except(['media_type','audience']);
        $model_name = $this::MODEL_NAME;
        $email = $this::VIEW_FOLDER;
        $service_type = new $model_name($data);
        $service_type->fill($data);
        if($request->media_type) {
            $media_type = implode(", ", $request->media_type);
            $service_type->media_type = $media_type;
        }
        if($request->audience) {
            $audience = implode(", ", $request->audience);
            $service_type->audience = $audience;
        }

        $service_type->clients_id=Session::get('id');
        $service_type->status='Received';

        ($request->file('image') ? $service_type->image=URL::to('/') . "/uploads/" . $myPath : "");
        $service_type->save();
        $comment = new Comments;
        $comment->services_id = $service_type->id;
        $comment->service = $model_name;
        $comment->status = 'Received';
        $comment->comment = "Request submitted";
//        if($request->comment) {
//            $comment->comment = $request->comment;
//        }
        $comment->save();

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
        $model_name = $this::MODEL_NAME;
        $service_type = $model_name::where('clients_id', '=', $id)->first();
//        dd($service_type);
        return view($this::VIEW_FOLDER . '.create')->with(compact('service_type'));
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
        echo "test";
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
        $client = Clients::find($id);
        $model_name = $this::MODEL_NAME;
        $service_type = $model_name::where('clients_id', '=', $id)->first();
//        dd($service_type);
        $comments = \App\Comments::where('services_id', '=', $service_type->id)->where('service', '=', $this::MODEL_NAME)->orderBy('created_at','desc')
            ->get();
        $last_comment = \App\Comments::where('services_id', '=', $service_type->id)->where('service', '=', $this::MODEL_NAME)->orderBy('created_at','desc')->first();
//        if(! $last_comment) {
//            $last_comment->status = "Received";
//        }
//        dd($last_comment);
        $view_folder = $this::VIEW_FOLDER;
        $service = $this::MODEL_NAME;
        $service_name = $this::MEDIA_NAME;
        return view('admin')->with(compact('service_type', 'service','comments','last_comment','service_name','view_folder','client'));
//        return view('test.show')->with(compact('service_type', 'service','comments','service_name','view_folder'));
    }

    public function returnShow($id)
    {
        $model_name = $this::MODEL_NAME;
        $service_type = $model_name::where('clients_id', '=', $id)->first();
//        dd($service_type);
        $comments = \App\Comments::where('services_id', '=', $service_type->id)->where('service', '=', $this::MODEL_NAME)->orderBy('created_at','desc')->get();
        $view_folder = $this::VIEW_FOLDER;
        $service = $this::MODEL_NAME;
        $service_name = $this::MEDIA_NAME;
        $status = "Received";
        return view('return')->with(compact('service_type', 'service','comments','service_name','view_folder','status'));
    }
}
