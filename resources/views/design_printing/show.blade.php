@extends('layouts.app') @section('content')
<div class="main container">



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
    @if($design_printings->payment_type == 'Transfer Funds')
        <h3 align="center">Accounting numbers</h3>
        <h3 class="item wrapper">{{$design_printings->dept}}{{$design_printings->fund}}  {{$design_printings->class}}</h3>
    @endif
    @if($design_printings->payment_type == 'Grant')
        <h3 align="center">Grant Number</h3>
        <h3 class="item wrapper">{{$design_printings->grant_number}}</h3>
    @endif
    <h3 align="center">Job Description</h3>
    <h3 class="item">{{$design_printings->job_description}}</h3>
    <h3 align="center">No. of Copies</h3>
    <h3 class="item wrapper">{{$design_printings->copies}}</h3>
    <h3 align="center">Date Needed</h3>
    <h3 class="item wrapper">{{$design_printings->date_needed}}</h3>
    <h3 align="center">Project Type</h3>
    <h3 class="item wrapper">{{$design_printings->services_needed}}</h3>
    <h3 align="center">Color or Black & White</h3>
    <h3 class="item wrapper">{{$design_printings->color}}</h3>
    <h3 align="center">Attached Document</h3>
    <h3 class="item wrapper"><a href="{{$design_printings->image}}">Link</a> </h3>



@endsection
