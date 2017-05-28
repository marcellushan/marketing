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
        $data = Clients::find($id);
        $press_release = PressReleases::where('clients_id', '=', $id)->first();
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
        Session::put('social_media',$request->social_media);
        Session::put('event',$request->event);

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
        (@$data->designPrintings ? $design_printing = $data->designPrintings : $design_printings = '');
        (@$data->photography ? $photography = $data->photography : $photography = '');
        (@$data->videography ? $videography = $data->videography : $videography = '');
        (@$data->paidAdvertising ? $paid_advertising = $data->paidAdvertising : $paid_advertising = '');
        (@$data->presentation ? $presentation = $data->presentation : $presentation = '');
        (@$data->socialMedia ? $social_media = $data->socialMedia : $social_media = '');
        (@$data->event ? $event = $data->event : $event = '');
//        dd($photography);
        return view('show')->with(compact('data','press_release', 'design_printing','photography','videography','paid_advertising','presentation','social_media','event'));
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
        Clients::destroy($id);
    }
}
