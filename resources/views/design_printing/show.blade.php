@extends('layouts.app') @section('content')
<div class="main container">
    <div class="row">
        <div class="title col-md-10 col-md-offset-2">Design and Printing</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">What's needed?</div>
        <div class="col-sm-7 item">{{$design_printings->needs}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Audience</div>
        <div class="col-sm-7 item">
            @if($design_printings->students) Students @endif
            @if($design_printings->faculty_staff) Faculty/Staff @endif
            @if($design_printings->community) Community @endif
            @if($design_printings->alumni) Alumni @endif
        </div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Payment Type</div>
        <div class="col-sm-7 item">{{$design_printings->payment_type}}</div>
    </div>
    @if($design_printings->payment_type == 'Transfer Funds')
        <div class="row">
            <div class="col-sm-3 category">Accounting numbers</div>
            <div class="col-sm-7 item">{{$design_printings->dept}}{{$design_printings->fund}}  {{$design_printings->class}}</div>
        </div><p></p>
    @endif
    @if($design_printings->payment_type == 'Grant')
        <div class="row">
            <div class="col-sm-3 category">Grant Number</div>
            <div class="col-sm-7 item">{{$design_printings->grant_number}}</div>
        </div><p></p>
    @endif
    <div class="row">
        <div class="col-sm-3 category">Description</div>
        <div class="col-sm-7 item">{{$design_printings->job_description}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">No. of Copies</div>
        <div class="col-sm-7 item">{{$design_printings->copies}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Date Needed</div>
        <div class="col-sm-7 item">{{$design_printings->date_needed}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Project Type</div>
        <div class="col-sm-7 item">{{$design_printings->services_needed}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Color or Black & White</div>
        <div class="col-sm-7 item">{{$design_printings->color}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Documents</div>
        <div class="col-sm-7 item"><a href="{{$design_printings->image}}">Link</a> </div>
    </div><p></p>

@component('components.comments', (compact('comments')))
@endcomponent

@endsection
