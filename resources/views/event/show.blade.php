@extends('layouts.app') @section('content')
<div class="main container">
    <h2 align="center">Event Aid</h2>
    <h3 align="center">GHC Event? <span class="item">@if($event->GHC) Yes @else No @endif</span> </h3>
    <h3 class="wrapper">Event Name</h3>
    <h3 class="item wrapper">{{$event->name}}</h3>
    <h3 class="wrapper">Event Date and Time</h3>
    <h3 class="item wrapper">{{$event->event_date}} at {{$event->event_time}}</h3>
    <h3 class="wrapper">Display/Promotional Items Needed</h3>
    <h3 class="item wrapper" >
        @if($event->banners) Banners @endif
        @if($event->table_clothes) Table Clothes @endif
        @if($event->magazines) Easels @endif
        @if($event->promo) Promotional Material @endif
        @if($event->signs) Signs @endif
        @if($event->recruitment) Recruitment Materials @endif
        @if($event->other) Other @endif
    </h3>
    @if($event->other)
        <h3 class="wrapper">Other Details</h3>
        <h3 class="item wrapper">{{$event->other_details}}</h3>
    @endif
    @if($event->pickup_name)
        <h3 class="wrapper">
            Who will be in charge of picking up these items, using them, and returning them?
        </h3>
        <div class="row">
            <h3 class="col-md-7 col-md-offset-4">Name
                <span class="item">{{$event->pickup_name}}</span>
            </h3>
            <h3 class="col-md-7 col-md-offset-4">Email
                <span class="item">{{$event->pickup_email}}</span>
            </h3>
            <h3 class="col-md-7 col-md-offset-4">Phone
                <span class="item">{{$event->pickup_phone}}</span>
            </h3>
            <h3 class="col-md-7 col-md-offset-4">Department
                <span class="item">{{$event->pickup_department}}</span>
            </h3>
        </div>
@endif

@endsection
