{{--@extends('layouts.app') @section('content')--}}
{{--<div class="main container">--}}
    {{--<h2 align="center">Event Aid</h2>--}}
    {{--<h3 align="center">GHC Event? <span class="item">@if($event->GHC) Yes @else No @endif</span> </h3>--}}
    {{--<h3 class="wrapper">Event Name</h3>--}}
    {{--<h3 class="item wrapper">{{$event->name}}</h3>--}}
    {{--<h3 class="wrapper">Event Date and Time</h3>--}}
    {{--<h3 class="item wrapper">{{$event->event_date}} at {{$event->event_time}}</h3>--}}
    {{--<h3 class="wrapper">Display/Promotional Items Needed</h3>--}}
    {{--<h3 class="item wrapper" >--}}
        {{--@if($event->banners) Banners @endif--}}
        {{--@if($event->table_clothes) Table Clothes @endif--}}
        {{--@if($event->magazines) Easels @endif--}}
        {{--@if($event->promo) Promotional Material @endif--}}
        {{--@if($event->signs) Signs @endif--}}
        {{--@if($event->recruitment) Recruitment Materials @endif--}}
        {{--@if($event->other) Other @endif--}}
    {{--</h3>--}}
    {{--@if($event->other)--}}
        {{--<h3 class="wrapper">Other Details</h3>--}}
        {{--<h3 class="item wrapper">{{$event->other_details}}</h3>--}}
    {{--@endif--}}
    {{--@if($event->pickup_name)--}}
        {{--<h3 class="wrapper">--}}
            {{--Who will be in charge of picking up these items, using them, and returning them?--}}
        {{--</h3>--}}
        {{--<div class="row">--}}
            {{--<h3 class="col-md-7 col-md-offset-4">Name--}}
                {{--<span class="item">{{$event->pickup_name}}</span>--}}
            {{--</h3>--}}
            {{--<h3 class="col-md-7 col-md-offset-4">Email--}}
                {{--<span class="item">{{$event->pickup_email}}</span>--}}
            {{--</h3>--}}
            {{--<h3 class="col-md-7 col-md-offset-4">Phone--}}
                {{--<span class="item">{{$event->pickup_phone}}</span>--}}
            {{--</h3>--}}
            {{--<h3 class="col-md-7 col-md-offset-4">Department--}}
                {{--<span class="item">{{$event->pickup_department}}</span>--}}
            {{--</h3>--}}
        {{--</div>--}}
{{--@endif--}}

{{--@endsection--}}

    @extends('layouts.app') @section('content')
        <div class="main container">
            <div class="row">
                <div class="title col-md-10 col-md-offset-2">Event Aid</div>
            </div>
            <div class="row">
                <div class="col-sm-3 category">GHC Event</div>
                <div class="col-sm-8 item">
                    @if($event->GHC) Yes @else No @endif
                </div>
            </div><p></p>
            <div class="row">
                <div class="col-sm-3 category">Event Name</div>
                <div class="col-sm-8 item">{{$event->name}}</div>
            </div><p></p>
            <div class="row">
                <div class="col-sm-3 category">Event Date and Time</div>
                <div class="col-sm-8 item">{{$event->event_date}} at {{$event->event_time}}</div>
            </div><p></p>
            <div class="row">
                <div class="col-sm-3 category">Display/Promotional Items Needed</div>
                <div class="col-sm-8 item">
                    @if($event->banners) Banners @endif
                    @if($event->table_clothes) Table Clothes @endif
                    @if($event->magazines) Easels @endif
                    @if($event->promo) Promotional Material @endif
                    @if($event->signs) Signs @endif
                    @if($event->recruitment) Recruitment Materials @endif
                    @if($event->other) Other @endif
                </div>
            </div><p></p>
            @if($event->other)
                <div class="row">
                    <div class="col-sm-3 category">Other Details</div>
                    <div class="col-sm-8 item">{{$event->other_details}}</div>
                </div><p></p>
            @endif
            @if($event->pickup_name)
                <div class="row">
                    <div class="col-sm-3 category">Pickup Person</div>
                    <div class="col-sm-8 item">Name:  {{$event->pickup_name}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-3 category"></div>
                    <div class="col-sm-8 item">Email:  {{$event->pickup_email}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-3 category"></div>
                    <div class="col-sm-8 item">Phone:  {{$event->pickup_phone}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-3 category"></div>
                    <div class="col-sm-8 item">Department:  {{$event->pickup_department}}</div>
                </div><p></p>
            @endif
            {!! Form::open(['url' => 'update']) !!}
            {!! Form::hidden('service', $service) !!}
            {!! Form::hidden('services_id', $event->id) !!}

            <div class="row">
                <div class="col-sm-3 category">Status</div>
                <div class="col-sm-8 item">{!! Form::select('status', ['1' => 'Received', '2' => 'In Progress', '3' =>
        'Awaiting Information', '4' => 'Awaiting Review', '5' => 'Complete'], $event->status); !!}</div>
            </div>
        </div>
</div>



@component('components.comments', (compact('comments')))
@endcomponent

{!! Form::close() !!}


@endsection


