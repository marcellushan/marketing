@extends('layouts.app') @section('content')
<div class="main container">

    <h2 align="center">Videography</h2>
    <h3 align="center">What/who do you need video of?</h3>
    <h3 class="item">{{$videography->requirements}}</h3>
    <h3 align="center">Audience</h3>
    <h3 class="item" align="center">
        @if($videography->students) Students @endif
        @if($videography->faculty_staff) Faculty/Staff @endif
        @if($videography->community) Community @endif
        @if($videography->alumni) Alumni @endif
    </h3>
    <h3 align="center">Please provide details and purpose for video.</h3>
    <h3 class="item">{{$videography->purpose}}</h3>
    <h3 align="center">How/where will you use the video?</h3>
    <h3 class="item">{{$videography->use}}</h3>



@endsection
