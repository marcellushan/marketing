@extends('layouts.app') @section('content')
<div class="main container">

    <h2 class="wrapper">Social Media</h2>
    <h3 class="wrapper">Request Type</h3>
    <h3 class="item wrapper">{{$social_media->media_type}}</h3>
    <h3 class="wrapper">Audience</h3>
    <h3 class="item wrapper" >
        @if($social_media->students) Students @endif
        @if($social_media->faculty_staff) Faculty/Staff @endif
        @if($social_media->community) Community @endif
        @if($social_media->alumni) Alumni @endif
    </h3>
    @if($social_media->media_type=="Starting New Page")
        <h3 class="wrapper">What is the Purpose of the page?</h3>
        <h3 class="item wrapper">{{$social_media->purpose}}</h3>
        <h3 class="wrapper">Who will manage the page?</h3>
        <h3 class="item wrapper">{{$social_media->name}}</h3>
        <h3 class="item wrapper">{{$social_media->email}}</h3>
        <h3 class="item wrapper">{{$social_media->phone}}</h3>
        <h3 class="item wrapper">{{$social_media->department}}</h3>
        <h3 class="wrapper">Which social media network are you interested in?</h3>
        <h3 class="item wrapper" >
            @if($social_media->facebook) Facebook @endif
            @if($social_media->twitter) Twitter @endif
            @if($social_media->instagram) Instagram @endif
            @if($social_media->youtube) YouTube @endif
        </h3>
        <h3 class="wrapper">How would you reach your target audience?</h3>
        <h3 class="item wrapper">{{$social_media->how}}</h3>
    @else
        <h3 class="wrapper">What does the post need to say?</h3>
        @if($social_media->facebook_text)
            <h3 class="wrapper">Facebook</h3>
            <h3 class="item wrapper">{{$social_media->facebook_text}}</h3>
        @endif
        @if($social_media->twitter_text)
            <h3 class="wrapper">Facebook</h3>
            <h3 class="item wrapper">{{$social_media->twitter_text}}</h3>
        @endif
        @if($social_media->image)
            <h3 class="wrapper">Graphics</h3>
            <h3 class="item wrapper"><a href="{{$social_media->image}}">Link</a></h3>
@endif
@endif



@endsection
