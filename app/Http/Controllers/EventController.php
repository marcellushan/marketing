<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use DB;
use Session;
use URL;

use App\Clients;
use App\Comments;


class EventController extends BaseController
{
    const MEDIA_NAME = "Event Aid";
    const MODEL_NAME = 'App\\Event';
    const VIEW_FOLDER = 'event';
    const TABLE_NAME = 'events';
    const MAIL = 'Event';

    public function store(Request $request)
    {
        $data = $request->except(['start_hour', 'start_minute', 'start_AM', 'display']);
        $event_time = $request->start_hour . ":" . $request->start_minute . " " . $request->start_AM;
        $model_name = $this::MODEL_NAME;
//        $email = $this::VIEW_FOLDER;
        $service_type = new $model_name($data);
        $service_type->fill($data);
        $service_type->event_time = $event_time;
        if ($request->display) {
            $display = implode(", ", $request->display);
            $service_type->display = $display;
            $service_type->clients_id = Session::get('id');
            $service_type->status = 'Received';
            $service_type->save();
            $comment = new Comments;
            $comment->services_id = $service_type->id;
            $comment->service = $model_name;
            $comment->status = 'Received';
            $comment->comment = "Request submitted";
            $comment->save();

            $url = $this::VIEW_FOLDER . '/' . Session::get('id');
            $which_mail = '\\App\\Mail\\' . $this::MAIL;
            if ($this::VIEW_FOLDER == 'design_printing') {
                $mailgroup = 'PRINTING';
            } elseif ($this::VIEW_FOLDER == 'photography' || $this::VIEW_FOLDER == 'videography') {
                $mailgroup = 'GRAPHY';
            } elseif ($this::VIEW_FOLDER == 'event') {
                $mailgroup = 'EVERYONE';
            } else {
                $mailgroup = 'MARKETING';
            }

            $to = explode(',', env($mailgroup));
            \Mail::to($to)
                ->cc('mhannah@highlands.edu')
                ->send(new $which_mail());
            Session::put($this::VIEW_FOLDER, 2);
            return redirect($url);
//        return redirect('service');
        }
    }
}
