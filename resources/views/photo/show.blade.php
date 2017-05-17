@extends('layouts.app') @section('content')
<div class="main container">

    <h2 align="center">Photography</h2>
    <h3 align="center">What/who do you need photographed?</h3>
    <h3 class="item wrapper">{{$photography->requirements}}</h3>
    <h3 align="center">Location</h3>
    <h3 class="item wrapper">{{$photography->location}}</h3>
    <h3 align="center">How/where will you use the photos?</h3>
    <h3 class="item wrapper">{{$photography->use}}</h3>
    <h3 align="center">Shoot date</h3>
    <h3 class="item wrapper">{{$photography->requested_date}}</h3>
    <h3 align="center">Start time</h3>
    <h3 class="item wrapper">{{$photography->start}}</h3>
    <h3 align="center">End time</h3>
    <h3 class="item wrapper">{{$photography->end}}</h3>



@endsection
