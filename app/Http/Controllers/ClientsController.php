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
        Session::put('paid_advertising',$request->paid_advertising);
        Session::put('presentation',$request->presentation);

        Session::put('id',$client->id);
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
        (@$data->pressRelease ? $press_release = $data->pressRelease : $press_release = '');
        (@$data->designPrintings ? $design_printings = $data->designPrintings : $design_printings = '');
//        dd($design_printings);
        return view('show')->with(compact('data','press_release', 'design_printings'));
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
