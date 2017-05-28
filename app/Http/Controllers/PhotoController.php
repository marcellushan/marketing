<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use App\Comments;

use Session;
use DB;

class PhotoController extends BaseController
{
    const MEDIA_NAME = "Photography";
    const MODEL_NAME = 'App\\Photo';
    const VIEW_FOLDER = 'photography';
    const TABLE_NAME = 'photos';
    const MAIL = 'Photography';
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        $datas= DB::table('photos')->join('clients', 'photos.clients_id', '=', 'clients.id')->get();
//        return view('photo.list')->with(compact('datas'));
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        return view('photo.create');
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
////        dd($request);
//        $data = $request->all();
//        $request_type = new Photo($data);
//        $request_type->clients_id=Session::get('id');
//        $request_type->fill($data);
//        $request_type->save();
//        Session::put('photography',2);
//        return redirect('service');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Photo  $photo
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        $photography = Photo::where('clients_id', '=', $id)->first();
//        $comments = Comments::where('services_id', '=', $photography->id)->where('service', '=', 'Photo')->get();
//        $service = 'Photo';
//        return view('photo.show')->with(compact('photography', 'service','comments'));
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Photo  $photo
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Photo $photo)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Photo  $photo
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Photo $photo)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Photo  $photo
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Photo $photo)
//    {
//        //
//    }
}
