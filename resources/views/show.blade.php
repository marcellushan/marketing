@extends('layouts.app') @section('content')
<div class="main container">
    <h1 class="wrapper">Marketing Communications Service Form</h1>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="row">
            <h3 class="col-md-4 col-md-offset-2">First name
                <span class="item">{{$data->first_name}}</span>
            </h3>
            <h3 class="col-md-4">Last name
                <span class="item">{{$data->last_name}}</span>
            </h3>
        </div>
    <div class="row">
        <h3 class="col-md-4 col-md-offset-2">Department
            <span class="item">{{$data->department}}</span>
        </h3>
        <h3 class="col-md-4">Email Address
            <span class="item">{{$data->email}}</span>
        </h3>
    </div>
    <div class="row">
        <h3 class="col-md-4 col-md-offset-2">Phone
            <span class="item">{{$data->phone}}</span>
        </h3>
        <h3 class="col-md-4">Request Due Date
            <span class="item">{{$data->due_date}}</span>
        </h3>
    </div>
    <br>
    <h3 align="center">Brief Project Summary</h3>
    <h3 class="item">{{$data->summary}}</h3>

    @if($press_release)

        <h2 align="center">Press Release/Media Advisory</h2>
        <h3 align="center">News Type</h3>
        <h3 class="item" align="center">
            @if($press_release->student_feature) Student Feature @endif
            @if($press_release->departmental_news) Departmental News @endif
            @if($press_release->student_news) Student News @endif
            @if($press_release->college_news) College News @endif
            @if($press_release->alumni_feature) Alumni Feature @endif
            @if($press_release->research) Research @endif
            @if($press_release->alumni_news) Alumni News @endif
            @if($press_release->recognition) Recognition @endif
            @if($press_release->employee_feature) Employee Feature @endif
            @if($press_release->award) Award @endif
            @if($press_release->employee_news) Employee News @endif
            @if($press_release->retirement)Retirement @endif

        </h3>
        <h3 align="center">Why is this of significant news value? Briefly describe any key points.</h3>
        <h3 class="item">{{$press_release->significant}}</h3>
        <h3 align="center">In addition to media, to what other professional and corporate publication should we submit this story?</h3>
        <h3 class="item">{{$press_release->professional}}</h3>
        <h3 align="center">Did you have any promotional materials
            created for this request by the
            Marcom design team?</h3>
        <h3 class="item">{{$press_release->professional}}</h3>
        <h3 align="center">Audience</h3>
        <h3 class="item" align="center">
            @if($press_release->students) Students @endif
            @if($press_release->faculty_staff) Faculty/Staff @endif
            @if($press_release->community) Community @endif
            @if($press_release->alumni) Alumni @endif
        </h3>
        <h3 class="wrapper"><a href="{{$press_release->image}}" >Link</a></h3>
    @endif

    @if($design_printings)
        <h2 align="center">Design & Printing</h2>
        <h3 align="center">What do you need designed/printed?</h3>
        <h3 class="item">{{$design_printings->needs}}</h3>
        <h3 align="center">Audience</h3>
        <h3 class="item" align="center">
            @if($design_printings->students) Students @endif
            @if($design_printings->faculty_staff) Faculty/Staff @endif
            @if($design_printings->community) Community @endif
            @if($design_printings->alumni) Alumni @endif
        </h3>
        <h3 align="center">Payment Type <span class="item">{{$design_printings->payment_type}}</span> </h3>
        <h3 align="center">Job Description</h3>
        <h3 class="item">{{$design_printings->job_description}}</h3>
    @endif


    <div class="row">
        <div class="col-md-3 col-md-offset-5">
            <div class="form-group">
               <input type="submit" class="btn-default btn-lg">
            </div>
        </div>

    </div>
</div>
@endsection
