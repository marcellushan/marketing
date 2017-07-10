<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Session;
use App\Clients;
use App\ServiceRequests;

class BaseEmail extends Mailable
{
    const MEDIA_NAME = "abstract";
    const METHOD = 'abstract';
    const VIEW_FOLDER = 'abstract';


    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = ServiceRequests::find(Session::get('id'));
        $service_method = $this::METHOD;
        $view_folder=$this::VIEW_FOLDER;
        $service_name = $this::MEDIA_NAME;
        $service_type = $data->$service_method;
//        dd($service_type);
//        $email_view = 'emails.' . $this::VIEW_FOLDER;
        return $this->from('webmaster@highlands.edu')
                    ->subject('A Marcom ' . $service_name . ' request has been submitted')
                    ->view('emails.services')->with(compact('data', 'service_type','service_name','view_folder'));
    }
}
