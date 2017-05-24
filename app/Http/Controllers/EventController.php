<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use App\Comments;
use Session;
use URL;
use DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas= DB::table('events')->join('clients', 'events.clients_id', '=', 'clients.id')->get();
        return view('event.list')->with(compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $data = $request->all();
        $request_type = new Event($data);
        $request_type->clients_id=Session::get('id');
        $request_type->fill($data);
        $request_type->save();
        Session::put('event',2);
        return redirect('service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::where('clients_id', '=', $id)->first();
        $comments = Comments::where('services_id', '=', $event->id)->where('service', '=', 'Event')->get();
        $service = 'Event';
        return view('event.show')->with(compact('event', 'service','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
