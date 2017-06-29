<?php

namespace App\Http\Controllers;

use App\Mail\StatusUpdate;
use App\Mail\AdminStatusUpdate;
use Illuminate\Http\Request;

use App\Comments;
use App\Clients;

class CommentsController extends Controller
{
   public function update(Request $request)
   {
//      dd($request);
//       echo $request->services_id;
       $service= $request->service;
       $service_name = ltrim($service, 'App\\');
       $media_name = $request->service_name;
       $data = $service::find($request->services_id);
       $data->status = $request->status;
       $data->save();
//       dd($data);
       $comment = '';
       $comment = new Comments;
       $comment->services_id = $request->services_id;
       $comment->service = $request->service;
       $comment->status = $request->status;
       $comment->username = (auth()->user() ? auth()->user()->name : 'Customer');
       if($request->comment) {
           $comment->comment = $request->comment;
       }
           $comment->save();
       $status = $request->status;
////       Session::put('press_release',2);
//       dd($request);
        if($request->user) {
            return redirect('clients/thank_you/'. $request->clients_id);
        }
       $client = Clients::find($request->clients_id);
//        dd($request);
       \Mail::to($client->email)->send(new StatusUpdate($status, $data, $comment, $request->view_folder, $media_name));
              if($request->view_folder == 'design_printing') {
           $mailgroup = 'PRINTING';
       } elseif($request->view_folder == 'photography' || $request->view_folder == 'videography') {
           $mailgroup = 'GRAPHY';
       } elseif ($request->view_folder == 'event') {
           $mailgroup = 'EVERYONE';
       }  else {
           $mailgroup = 'MARKETING';
       }

       $to = explode(',', env($mailgroup));
//       dd($media_name);

       \Mail::to($to)->send(new AdminStatusUpdate($status, $data, $comment, $request->view_folder, $media_name));


//       return redirect('service/' . $service_name);


//       $url = $this::VIEW_FOLDER . '/' . Session::get('id');
//       $which_mail = '\\App\\Mail\\' . $this::MAIL;
//       if($this::VIEW_FOLDER == 'design_printing') {
//           $mailgroup = 'PRINTING';
//       } elseif($this::VIEW_FOLDER == 'photography' || $this::VIEW_FOLDER == 'videography') {
//           $mailgroup = 'GRAPHY';
//       } elseif ($this::VIEW_FOLDER == 'event') {
//           $mailgroup = 'EVERYONE';
//       }  else {
//           $mailgroup = 'MARKETING';
//       }
//
//       $to = explode(',', env($mailgroup));
//       \Mail::to($to)
//           ->cc('mhannah@highlands.edu')
//           ->send(new $which_mail());


   }
}
