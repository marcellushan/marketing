<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PressReleases;

use Session;
use URL;

class PressReleasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('press_release.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//               dd($request);
        $file = $request->file('image');

        //Move Uploaded File
        $destinationPath = 'uploads';
//        $file->move($destinationPath,$file->getClientOriginalName());
        $myRandom = rand(1, 10000);
        $myPath = $myRandom . "." . $file->getClientOriginalExtension();
        $file->move($destinationPath, $myPath);
//
//
//
//        $trip = Trip::find(session('trip_id'));
//        $trip->commute_image = URL::to('/') . "/uploads/" . $myPath;
//        $trip->commute_mileage = $request->get('commute_mileage');
//            echo URL::to('/') . "/uploads/" . $myPath;

        $data = $request->all();
//        dd($request);
        $press_release = new PressReleases($data);
        $press_release->fill($data);
        $press_release->clients_id=Session::get('id');
        $press_release->image=URL::to('/') . "/uploads/" . $myPath;
//        dd($press_release);
        $press_release->save();
        Session::put('press_release',2);
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
        $press_release = PressReleases::where('clients_id', '=', $id)->first();
//        dd($press_release);
//        (@$data->pressRelease ? $press_release = $data->pressRelease : $press_release = '');
        return view('press_release.show')->with(compact('press_release'));
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
