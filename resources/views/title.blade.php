@extends('layouts.app') @section('content')
<div class="main container">
    <h1 class="wrapper">Marketing Communications Service Form</h1>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="row">
            <h3 class="col-md-4 col-md-offset-1">First name
                <span class="item">{{$data->first_name}}</span>
            </h3>
            <h3 class="col-md-3">Last name
                <span class="item">{{$data->last_name}}</span>
            </h3>
             <h3 class="col-md-4">Department
                 <span class="item">{{$data->department}}</span>
             </h3>
        </div>
    <div class="row">
        <h3 class="col-md-4 col-md-offset-1">Email Address
            <span class="item">{{$data->email}}</span>
        </h3>
        <h3 class="col-md-3">Phone
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
        <h2 align="center"><a href="{{URL::to('/')}}/press_releases/{{$data->id}}"> Press Release/Media Advisory</a></h2>
    @endif

    @if($design_printings)
        <h2 align="center"><a href="{{URL::to('/')}}/design_printing/{{$data->id}}"> Design and Printing</a></h2>
    @endif

    @if($photography)
        <h2 align="center"><a href="{{URL::to('/')}}/photography/{{$data->id}}">Photography</a></h2>
    @endif

    @if($videography)
        <h2 align="center"><a href="{{URL::to('/')}}/videography/{{$data->id}}">Videography</a></h2>
    @endif

    @if($paid_advertising)
        <h2 align="center"><a href="{{URL::to('/')}}/paid_advertising/{{$data->id}}">Paid Advertising</a></h2>
    @endif

    @if($presentation)
        <h2 align="center"><a href="{{URL::to('/')}}/presentation/{{$data->id}}"> Presentation</a></h2>
    @endif

    @if($social_media)
        <h2 align="center"><a href="{{URL::to('/')}}/social_media/{{$data->id}}"> Social Media</a></h2>
    @endif

    @if($event)
        <h2 align="center"><a href="{{URL::to('/')}}/event/{{$data->id}}"> Event Aid</a></h2>
    @endif


@endsection
