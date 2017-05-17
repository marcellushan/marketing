<?php

namespace App\Http\Controllers;

use App\DesignPrinting;
use Illuminate\Http\Request;
use Session;
use URL;

class DesignPrintingController extends Controller
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
        return view('design_printing.create');
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
        $file = $request->file('image');
        $destinationPath = 'uploads';
        $myRandom = rand(1, 10000);
        $myPath = $myRandom . "." . $file->getClientOriginalExtension();
        $file->move($destinationPath, $myPath);
        $data = $request->all();
        $design_printing = new DesignPrinting($data);
        $design_printing->fill($data);
        $design_printing->clients_id=Session::get('id');
        $design_printing->image=URL::to('/') . "/uploads/" . $myPath;
//        dd($design_printing);
        $design_printing->save();
        Session::put('design_printing',2);
        return redirect('service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DesignPrinting  $designPrinting
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $design_printings = DesignPrinting::where('clients_id', '=', $id)->first();
//        dd($press_release);
//        (@$data->pressRelease ? $press_release = $data->pressRelease : $press_release = '');
        return view('design_printing.show')->with(compact('design_printings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DesignPrinting  $designPrinting
     * @return \Illuminate\Http\Response
     */
    public function edit(DesignPrinting $designPrinting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DesignPrinting  $designPrinting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DesignPrinting $designPrinting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DesignPrinting  $designPrinting
     * @return \Illuminate\Http\Response
     */
    public function destroy(DesignPrinting $designPrinting)
    {
        //
    }
}
