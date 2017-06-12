<?php

namespace App\Http\Controllers;

use App\SocialMedia;
use Illuminate\Http\Request;



class SocialMediaController extends BaseController
{
    const MEDIA_NAME = "Social Media";
    const MODEL_NAME = 'App\\SocialMedia';
    const VIEW_FOLDER = 'social_media';
    const TABLE_NAME = 'social_media';
    const MAIL = 'SocialMedia';

    public function store(Request $request)
    {
        if($request->file('image')) {
            $file = $request->file('image');
            //Move Uploaded File
            $destinationPath = 'uploads';
            $myRandom = rand(1, 10000);
            $myPath = $myRandom . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $myPath);
        }
        $data = $request->except(['media_type','audience']);
//        dd($data);
        $model_name = $this::MODEL_NAME;
        $email = $this::VIEW_FOLDER;
        $service_type = new $model_name($data);
        $service_type->fill($data);
        if($request->audience) {
            $audience = implode(", ", $request->audience);
            $service_type->audience = $audience;
        }
        if($request->social) {
            $social = implode(", ", $request->social);
            $service_type->social = $social;
        }

        $service_type->clients_id=Session::get('id');
        $service_type->status='Received';

        ($request->file('image') ? $service_type->image=URL::to('/') . "/uploads/" . $myPath : "");
        $service_type->save();
        $comment = new Comments;
        $comment->services_id = $service_type->id;
        $comment->service = $model_name;
        $comment->status = 'Received';
        $comment->comment = "Request submitted";
//        if($request->comment) {
//            $comment->comment = $request->comment;
//        }
        $comment->save();

        $url = $this::VIEW_FOLDER . '/' . Session::get('id');
        $which_mail = '\\App\\Mail\\' . $this::MAIL;
        if($this::VIEW_FOLDER == 'design_printing') {
            $mailgroup = 'PRINTING';
        } elseif($this::VIEW_FOLDER == 'photography' || $this::VIEW_FOLDER == 'videography') {
            $mailgroup = 'GRAPHY';
        } elseif ($this::VIEW_FOLDER == 'event') {
            $mailgroup = 'EVERYONE';
        }  else {
            $mailgroup = 'MARKETING';
        }

        $to = explode(',', env($mailgroup));
        \Mail::to($to)
            ->cc('mhannah@highlands.edu')
            ->send(new $which_mail());
        Session::put($this::VIEW_FOLDER,2);
        return redirect($url);
//        return redirect('service');
    }
}
