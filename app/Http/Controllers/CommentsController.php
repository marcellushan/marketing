<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comments;

class CommentsController extends Controller
{
   public function update(Request $request)
   {
//      dd($request);
//       $data = $request->id();
//        dd($request);
       $comment = new Comments;
       $comment->service_id = $request->id;
       $comment->service_type = $request->service;
       $comment->comment = $request->comment;

//       $press_release->fill($data);
//       $press_release->clients_id=Session::get('id');
//       $press_release->image=URL::to('/') . "/uploads/" . $myPath;
//        dd($press_release);
       $comment->save();
//       Session::put('press_release',2);
//       return redirect('service');
   }
}
