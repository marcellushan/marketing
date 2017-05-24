{{--@extends('layouts.app') @section('content')--}}
{{--<div class="main container">--}}

    {{--<h2 class="wrapper">Social Media</h2>--}}
    {{--<h3 class="wrapper">Request Type</h3>--}}
    {{--<h3 class="item wrapper">{{$service_type->media_type}}</h3>--}}
    {{--<h3 class="wrapper">Audience</h3>--}}
    {{--<h3 class="item wrapper" >--}}
        {{--@if($service_type->students) Students @endif--}}
        {{--@if($service_type->faculty_staff) Faculty/Staff @endif--}}
        {{--@if($service_type->community) Community @endif--}}
        {{--@if($service_type->alumni) Alumni @endif--}}
    {{--</h3>--}}
    {{--@if($service_type->media_type=="Starting New Page")--}}
        {{--<h3 class="wrapper">What is the Purpose of the page?</h3>--}}
        {{--<h3 class="item wrapper">{{$service_type->purpose}}</h3>--}}
        {{--<h3 class="wrapper">Who will manage the page?</h3>--}}
        {{--<h3 class="item wrapper">{{$service_type->name}}</h3>--}}
        {{--<h3 class="item wrapper">{{$service_type->email}}</h3>--}}
        {{--<h3 class="item wrapper">{{$service_type->phone}}</h3>--}}
        {{--<h3 class="item wrapper">{{$service_type->department}}</h3>--}}
        {{--<h3 class="wrapper">Which social media network are you interested in?</h3>--}}
        {{--<h3 class="item wrapper" >--}}
            {{--@if($service_type->facebook) Facebook @endif--}}
            {{--@if($service_type->twitter) Twitter @endif--}}
            {{--@if($service_type->instagram) Instagram @endif--}}
            {{--@if($service_type->youtube) YouTube @endif--}}
        {{--</h3>--}}
        {{--<h3 class="wrapper">How would you reach your target audience?</h3>--}}
        {{--<h3 class="item wrapper">{{$service_type->how}}</h3>--}}
    {{--@else--}}
        {{--<h3 class="wrapper">What does the post need to say?</h3>--}}
        {{--@if($service_type->facebook_text)--}}
            {{--<h3 class="wrapper">Facebook</h3>--}}
            {{--<h3 class="item wrapper">{{$service_type->facebook_text}}</h3>--}}
        {{--@endif--}}
        {{--@if($service_type->twitter_text)--}}
            {{--<h3 class="wrapper">Facebook</h3>--}}
            {{--<h3 class="item wrapper">{{$service_type->twitter_text}}</h3>--}}
        {{--@endif--}}
        {{--@if($service_type->image)--}}
            {{--<h3 class="wrapper">Graphics</h3>--}}
            {{--<h3 class="item wrapper"><a href="{{$service_type->image}}">Link</a></h3>--}}
{{--@endif--}}
{{--@endif--}}



{{--@endsection--}}

    @extends('layouts.app') @section('content')
        <div class="main container">
            <div class="row">
                <div class="title col-md-10 col-md-offset-2">{{$service_name}}</div>
            </div>
            <div class="row">
                <div class="col-sm-3 category">Media Type</div>
                <div class="col-sm-8 item">
                    {{$service_type->media_type}}
                </div>
            </div><p></p>
            <div class="row">
                <div class="col-sm-3 category">Audience</div>
                <div class="col-sm-8 item">
                    @if($service_type->students) Students @endif
                    @if($service_type->faculty_staff) Faculty/Staff @endif
                    @if($service_type->community) Community @endif
                    @if($service_type->alumni) Alumni @endif
                </div>
            </div><p></p>
            @if($service_type->media_type=="Starting New Page")
                <div class="row">
                    <div class="col-sm-3 category">Page Manager</div>
                    <div class="col-sm-8 item">Name:  {{$service_type->name}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-3 category"></div>
                    <div class="col-sm-8 item">Email:  {{$service_type->email}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-3 category"></div>
                    <div class="col-sm-8 item">Phone:  {{$service_type->phone}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-3 category"></div>
                    <div class="col-sm-8 item">Department:  {{$service_type->department}}</div>
                </div><p></p>
                <div class="row">
                    <div class="col-sm-3 category">Network Interest</div>
                    <div class="col-sm-8 item">
                        @if($service_type->facebook) Facebook @endif
                        @if($service_type->twitter) Twitter @endif
                        @if($service_type->instagram) Instagram @endif
                        @if($service_type->youtube) YouTube @endif
                    </div>
                </div><p></p>
                <div class="row">
                    <div class="col-sm-3 category">How</div>
                    <div class="col-sm-8 item">
                        {{$service_type->how}}
                    </div>
                </div><p></p>
                <div class="row">
                    <div class="col-sm-3 category">Details</div>
                    <div class="col-sm-8 item">
                        {{$service_type->details}}
                    </div>
                </div><p></p>
            @else
                @if($service_type->facebook_text)
                    <div class="row">
                        <div class="col-sm-3 category">Facebook Text</div>
                        <div class="col-sm-8 item">
                            {{$service_type->facebook_text}}
                        </div>
                    </div><p></p>
                @endif
                @if($service_type->twitter_text)
                    <div class="row">
                        <div class="col-sm-3 category">Twitter Text</div>
                        <div class="col-sm-8 item">
                            {{$service_type->twitter_text}}
                        </div>
                    </div><p></p>
                @endif
                @if($service_type->image)
                    <div class="row">
                        <div class="col-sm-3 category">Graphics</div>
                        <div class="col-sm-8 item">
                            <a href="{{$service_type->image}}">Link</a>
                        </div>
                    </div><p></p>
                @endif
            @endif

            {!! Form::open(['url' => 'update']) !!}
            {!! Form::hidden('service', $service) !!}
            {!! Form::hidden('services_id', $service_type->id) !!}

            <div class="row">
                <div class="col-sm-3 category">Status</div>
                <div class="col-sm-8 item">{!! Form::select('status', ['1' => 'Received', '2' => 'In Progress', '3' =>
    'Awaiting Information', '4' => 'Awaiting Review', '5' => 'Complete'], $service_type->status); !!}</div>
            </div>
        </div>
</div>



@component('components.comments', (compact('comments')))
@endcomponent

{!! Form::close() !!}


@endsection

