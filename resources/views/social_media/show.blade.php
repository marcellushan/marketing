{{--@extends('layouts.app') @section('content')--}}
{{--<div class="main container">--}}

    {{--<h2 class="wrapper">Social Media</h2>--}}
    {{--<h3 class="wrapper">Request Type</h3>--}}
    {{--<h3 class="item wrapper">{{$social_media->media_type}}</h3>--}}
    {{--<h3 class="wrapper">Audience</h3>--}}
    {{--<h3 class="item wrapper" >--}}
        {{--@if($social_media->students) Students @endif--}}
        {{--@if($social_media->faculty_staff) Faculty/Staff @endif--}}
        {{--@if($social_media->community) Community @endif--}}
        {{--@if($social_media->alumni) Alumni @endif--}}
    {{--</h3>--}}
    {{--@if($social_media->media_type=="Starting New Page")--}}
        {{--<h3 class="wrapper">What is the Purpose of the page?</h3>--}}
        {{--<h3 class="item wrapper">{{$social_media->purpose}}</h3>--}}
        {{--<h3 class="wrapper">Who will manage the page?</h3>--}}
        {{--<h3 class="item wrapper">{{$social_media->name}}</h3>--}}
        {{--<h3 class="item wrapper">{{$social_media->email}}</h3>--}}
        {{--<h3 class="item wrapper">{{$social_media->phone}}</h3>--}}
        {{--<h3 class="item wrapper">{{$social_media->department}}</h3>--}}
        {{--<h3 class="wrapper">Which social media network are you interested in?</h3>--}}
        {{--<h3 class="item wrapper" >--}}
            {{--@if($social_media->facebook) Facebook @endif--}}
            {{--@if($social_media->twitter) Twitter @endif--}}
            {{--@if($social_media->instagram) Instagram @endif--}}
            {{--@if($social_media->youtube) YouTube @endif--}}
        {{--</h3>--}}
        {{--<h3 class="wrapper">How would you reach your target audience?</h3>--}}
        {{--<h3 class="item wrapper">{{$social_media->how}}</h3>--}}
    {{--@else--}}
        {{--<h3 class="wrapper">What does the post need to say?</h3>--}}
        {{--@if($social_media->facebook_text)--}}
            {{--<h3 class="wrapper">Facebook</h3>--}}
            {{--<h3 class="item wrapper">{{$social_media->facebook_text}}</h3>--}}
        {{--@endif--}}
        {{--@if($social_media->twitter_text)--}}
            {{--<h3 class="wrapper">Facebook</h3>--}}
            {{--<h3 class="item wrapper">{{$social_media->twitter_text}}</h3>--}}
        {{--@endif--}}
        {{--@if($social_media->image)--}}
            {{--<h3 class="wrapper">Graphics</h3>--}}
            {{--<h3 class="item wrapper"><a href="{{$social_media->image}}">Link</a></h3>--}}
{{--@endif--}}
{{--@endif--}}



{{--@endsection--}}

    @extends('layouts.app') @section('content')
        <div class="main container">
            <div class="row">
                <div class="title col-md-10 col-md-offset-2">Social Media</div>
            </div>
            <div class="row">
                <div class="col-sm-3 category">Media Type</div>
                <div class="col-sm-8 item">
                    {{$social_media->media_type}}
                </div>
            </div><p></p>
            <div class="row">
                <div class="col-sm-3 category">Audience</div>
                <div class="col-sm-8 item">
                    @if($social_media->students) Students @endif
                    @if($social_media->faculty_staff) Faculty/Staff @endif
                    @if($social_media->community) Community @endif
                    @if($social_media->alumni) Alumni @endif
                </div>
            </div><p></p>
            @if($social_media->media_type=="Starting New Page")
                <div class="row">
                    <div class="col-sm-3 category">Page Manager</div>
                    <div class="col-sm-8 item">Name:  {{$social_media->name}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-3 category"></div>
                    <div class="col-sm-8 item">Email:  {{$social_media->email}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-3 category"></div>
                    <div class="col-sm-8 item">Phone:  {{$social_media->phone}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-3 category"></div>
                    <div class="col-sm-8 item">Department:  {{$social_media->department}}</div>
                </div><p></p>
                <div class="row">
                    <div class="col-sm-3 category">Network Interest</div>
                    <div class="col-sm-8 item">
                        @if($social_media->facebook) Facebook @endif
                        @if($social_media->twitter) Twitter @endif
                        @if($social_media->instagram) Instagram @endif
                        @if($social_media->youtube) YouTube @endif
                    </div>
                </div><p></p>
                <div class="row">
                    <div class="col-sm-3 category">How</div>
                    <div class="col-sm-8 item">
                        {{$social_media->how}}
                    </div>
                </div><p></p>
                <div class="row">
                    <div class="col-sm-3 category">Purpose</div>
                    <div class="col-sm-8 item">
                        {{$social_media->purpose}}
                    </div>
                </div><p></p>
            @else
                @if($social_media->facebook_text)
                    <div class="row">
                        <div class="col-sm-3 category">Facebook Text</div>
                        <div class="col-sm-8 item">
                            {{$social_media->facebook_text}}
                        </div>
                    </div><p></p>
                @endif
                @if($social_media->twitter_text)
                    <div class="row">
                        <div class="col-sm-3 category">Twitter Text</div>
                        <div class="col-sm-8 item">
                            {{$social_media->twitter_text}}
                        </div>
                    </div><p></p>
                @endif
                @if($social_media->image)
                    <div class="row">
                        <div class="col-sm-3 category">Graphics</div>
                        <div class="col-sm-8 item">
                            <a href="{{$social_media->image}}">Link</a>
                        </div>
                    </div><p></p>
                @endif
            @endif

            {!! Form::open(['url' => 'update']) !!}
            {!! Form::hidden('service', $service) !!}
            {!! Form::hidden('services_id', $social_media->id) !!}

            <div class="row">
                <div class="col-sm-3 category">Status</div>
                <div class="col-sm-8 item">{!! Form::select('status', ['1' => 'Received', '2' => 'In Progress', '3' =>
    'Awaiting Information', '4' => 'Awaiting Review', '5' => 'Complete'], $social_media->status); !!}</div>
            </div>
        </div>
</div>



@component('components.comments', (compact('comments')))
@endcomponent

{!! Form::close() !!}


@endsection

