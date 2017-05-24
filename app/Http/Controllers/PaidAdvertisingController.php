<?php

namespace App\Http\Controllers;

use App\PaidAdvertising;
use Illuminate\Http\Request;
use App\Comments;


use Session;
use DB;

class PaidAdvertisingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas= DB::table('paid_advertisings')->join('clients', 'paid_advertisings.clients_id', '=', 'clients.id')->get();
        return view('paid_advertising.list')->with(compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paid_advertising.create');
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
        $request_type = new PaidAdvertising($data);
        $request_type->clients_id=Session::get('id');
        $request_type->fill($data);
        $request_type->save();
        Session::put('paid_advertising',2);
        return redirect('service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaidAdvertising  $paidAdvertising
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paid_advertising = PaidAdvertising::where('clients_id', '=', $id)->first();
//        dd($press_release);
//        (@$data->pressRelease ? $press_release = $data->pressRelease : $press_release = '');
//        return view('paid_advertising.show')->with(compact('paid_advertising'));

//        $photography = Photo::where('clients_id', '=', $id)->first();
        $comments = Comments::where('services_id', '=', $paid_advertising->id)->where('service', '=', 'PaidAdvertising')->get();
        $service = 'PaidAdvertising';
        return view('paid_advertising.show')->with(compact('paid_advertising', 'service','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaidAdvertising  $paidAdvertising
     * @return \Illuminate\Http\Response
     */
    public function edit(PaidAdvertising $paidAdvertising)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaidAdvertising  $paidAdvertising
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaidAdvertising $paidAdvertising)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaidAdvertising  $paidAdvertising
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaidAdvertising $paidAdvertising)
    {
        //
    }
}
