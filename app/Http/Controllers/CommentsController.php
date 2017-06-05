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
//       echo $request->services_id;
       $service= $request->service;
       $service_name = ltrim($service, 'App\\');
       $data = $service::find($request->services_id);
       $data->status = $request->status;
       $data->save();
       if($request->comment) {
           $comment = new Comments;
           $comment->services_id = $request->services_id;
           $comment->service = $request->service;
           $comment->comment = $request->comment;
           $comment->save();
       }
////       Session::put('press_release',2);
       return redirect('service/' . $service_name);
   }
}
