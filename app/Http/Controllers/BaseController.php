<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;


class BaseController extends Controller
{
    const MEDIA_NAME = "abstract";
    const MODEL_NAME = 'abstract';
    const VIEW_FOLDER = 'abstract';
    const TABLE_NAME = 'abstract';


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME . '.clients_id', '=', 'clients.id')->orderby('status')->get();
        $recieveds= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME  .'.clients_id', '=', 'clients.id')->where('status', '=', '1')->get();
        $progresses= DB::table($this::TABLE_NAME)->join('clients', $this::TABLE_NAME  .'.clients_id', '=', 'clients.id')->where('status', '=', '2')->get();
        $media_name = $this::MEDIA_NAME;
//
//       dd($datas);
        return view('requests_list')->with(compact('datas','recieveds','progresses', 'media_name'));
//        echo $this::TABLE_NAME;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(static::MEDIA_TYPE . '.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
