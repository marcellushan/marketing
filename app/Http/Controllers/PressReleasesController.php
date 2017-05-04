<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PressReleases;

use Session;

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
        $data = $request->all();
        $press_release = new PressReleases($data);
        $press_release->fill($data);
        $press_release->client_id=Session::get('id');
        $press_release->save();
//       $request->press_release;

//       session(['press_release' => $request->press_release]);
        Session::put('press_release',2);
//
//        echo Session::get('press_release');
//        echo $_SESSION['design_printing']= $request->design_printing;
//        echo $_SESSION['photography']= $request->photography;
//        echo $_SESSION['social_media']= $request->social_media;
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
        //
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
