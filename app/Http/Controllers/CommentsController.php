<?php

namespace App\Http\Controllers;

use App\Mail\StatusUpdate;
use Illuminate\Http\Request;

use App\Comments;
use App\Clients;

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
       switch ($data->status) {
           case 1:
               $status = 'Received';
               break;
           case 2:
               $status = 'In Progress';
               break;
           case 3:
               $status = 'Awaiting Information';
               break;
           case 4:
               $status = 'Awaiting Review';
               break;
           case 5:
               $status = 'Completed';
               break;
       }


//       dd($data);
       $comment = '';
       if($request->comment) {
           $comment = new Comments;
           $comment->services_id = $request->services_id;
           $comment->service = $request->service;
           $comment->comment = $request->comment;
           $comment->save();
       }
////       Session::put('press_release',2);

       $client = Clients::find($request->clients_id);

       \Mail::to($client->email)->send(new StatusUpdate($status, $comment));
       return redirect('service/' . $service_name);
   }
}
