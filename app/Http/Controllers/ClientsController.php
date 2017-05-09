<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Clients;

use Session;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       echo "home";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
//        echo "test";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//       dd($request);
        $data = $request->all();
        $client = new Clients($data);
        $client->fill($data);
        $client->save();

        Session::put('press_release',$request->press_release);
        Session::put('design_printing',$request->design_printing);
        Session::put('photography',$request->photography);
        Session::put('videography',$request->videography);
        Session::put('social_media',$request->social_media);
        Session::put('presentation',$request->presentation);


        Session::put('id',$client->id);

        echo Session::get('press_release');
//        echo $_SESSION['design_printing']= $request->design_printing;
//        echo $_SESSION['photo']= $request->photo;
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
        $data = Clients::find($id);
        $press = $data->pressRelease ?: "not found";
//        dd($press);
//        Clients::destroy($id);
//        dd($data);
        return view('show')->with(compact('data','press'));
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
