@extends('layouts.app') @section('content')
<div class="main container">

    <h2 align="center">Presentation/Interview Preparation</h2>
    <h3 align="center">Where are you presenting or being interviewed and
        on what topic?</h3>
    <h3 class="item">{{$presentation->topic}}</h3>
    <h3 align="center">Audience</h3>
    <h3 class="item" align="center">
        @if($presentation->students) Students @endif
        @if($presentation->faculty_staff) Faculty/Staff @endif
        @if($presentation->community) Community @endif
        @if($presentation->alumni) Alumni @endif
    </h3>
    <h3 align="center">When is this presentation or interview taking place?</h3>
    <h3 class="item">{{$presentation->presentation_date}}</h3>
    <h3 align="center">Please check the areas you would like assistance in:</h3>
    <h3 class="item">{{$presentation->area}}</h3>



@endsection
