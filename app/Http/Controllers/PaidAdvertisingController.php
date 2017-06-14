<?php

namespace App\Http\Controllers;

use App\PaidAdvertising;
use Illuminate\Http\Request;

use DB;
use Session;
use URL;

use App\Clients;
use App\Comments;
class PaidAdvertisingController extends BaseController
{
    const MEDIA_NAME = "Paid Advertising";
    const MODEL_NAME = 'App\\PaidAdvertising';
    const VIEW_FOLDER = 'paid_advertising';
    const TABLE_NAME = 'paid_advertisings';
    const MAIL = 'PaidAdvertising';


    public function store(Request $request)
    {
        $data = $request->except(['advertising','audience']);
        $model_name = $this::MODEL_NAME;
        $email = $this::VIEW_FOLDER;
        $service_type = new $model_name($data);
        $service_type->fill($data);
        if($request->advertising) {
            $advertising = implode(", ", $request->advertising);
            $service_type->advertising = $advertising;
        }
        if($request->audience) {
            $audience = implode(", ", $request->audience);
            $service_type->audience = $audience;
        }

        $service_type->clients_id=Session::get('id');
        $service_type->status='Received';
//        dd($service_type);
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
