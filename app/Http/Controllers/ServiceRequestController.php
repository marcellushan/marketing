<?php

namespace App\Http\Controllers;
session_start();
use App\ServiceRequests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Session;
use App\Mail\ClientMail;

class ServiceRequestController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(\App::environment() =='local') {
//            $_SESSION['nameIdentifier'] = 'mhannah';
//            $_SESSION['attributes']['givenname'] = 'Marc';
//            $_SESSION['attributes']['surname'] = 'Hannah';
//            $_SESSION['attributes']['Group'] = 'IT';
            return redirect('service_request/create');
            dd($_SESSION);
        } else {
            if(! @$_SESSION['AdfsUserDetails']) {
                $url='../../marctest/myform.php';
                echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
            } else {
                return redirect('service_request/create');
            }
        }

//        $user = User::firstOrCreate(['name' => 'Joe Hannah', 'email' => 'jhannah@highlands.edu','department' => 'HR']);
//        dd(\App::environment());

//            echo "here";
//        }


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(\App::environment() =='local') {
            $username = 'mhannah';
            $givenname = 'Marc ';
            $surname = 'Hannah';
            $department = 'HR';
        } else {
            $username = $_SESSION['nameIdentifier'];
            $givenname = implode(" ", $_SESSION['attributes']['givenname']);
            $surname = implode(" ", $_SESSION['attributes']['surname']);
            $department = implode(" ", $_SESSION['attributes']['Group']);
        }
        $user = User::firstOrCreate(['email' => $username . '@highlands.edu','name' => $givenname . ' ' . $surname, 'department' => $department]);
//        $_SESSION['user_id'] = $user->id;
        return view('service_request.create')->with(compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //       dd($request);
        $data = $request->all();
        $services= $request->only(['service']);
        $service_request = new ServiceRequests($data);
        $service_request->fill($data);
//        $service_request->user_id = session('user_id');
        $service_request->save();
        foreach ($services as $service)
        $key = in_array("photography", $service);
        session()->put('user_id', $service_request->user_id);

        Session::put('press_release',in_array("press_release", $service));
        Session::put('design_printing',in_array("design_printing", $service));
        Session::put('photography',in_array("photography", $service));
        Session::put('videography',in_array("videography", $service));
        Session::put('paid_advertising',in_array("paid_advertising", $service));
        Session::put('presentation',in_array("presentation", $service));
        Session::put('social_media',in_array("social_media", $service));
        Session::put('event',in_array("event", $service));

        Session::put('id',$service_request->id);
        return redirect('service');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ServiceRequests::find($id);
        $user_info = User::find($data->user_id);
//        dd($data);
        (@$data->pressRelease ? $press_release = $data->pressRelease : $press_release = '');
        (@$data->designPrinting ? $design_printing = $data->designPrinting : $design_printing = '');
        (@$data->photography ? $photography = $data->photography : $photography = '');
        (@$data->videography ? $videography = $data->videography : $videography = '');
        (@$data->paidAdvertising ? $paid_advertising = $data->paidAdvertising : $paid_advertising = '');
        (@$data->presentation ? $presentation = $data->presentation : $presentation = '');
        (@$data->socialMedia ? $social_media = $data->socialMedia : $social_media = '');
        (@$data->event ? $event = $data->event : $event = '');
//        dd($photography);
        return view('service_request.show')->with(compact('data','user_info','press_release', 'design_printing','photography','videography',
            'paid_advertising','presentation','social_media','event'));
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

    public function thankYou($id)
    {
        $data = ServiceRequests::find($id);
//        dd($data);
        $userinfo = User::find(session('user_id'));
        \Mail::to($userinfo->email)
            ->cc('mhannah@highlands.edu')
            ->send(new ClientMail($data));
        return view('thankyou');
    }

    public function byUser($id)
    {
        $service_requests = ServiceRequests::where('user_id', '=', $id)->orderBy('created_at','desc')->get();
        dd($service_requests);
        return view('service_request.user_list')->with(compact('service_requests'));
//        $data = ServiceRequests::find($id);
//        $userinfo = User::find($data->user_id);
//        \Mail::to($userinfo->email)->send(new ClientMail($data));
//        return view('thankyou');
    }
}
