@extends('layouts.app') @section('content')
<div class="main container">
    <div class="row">
        <div class="title col-md-10 col-md-offset-2">Design and Printing</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Details</div>
        <div class="col-sm-7 item">{{$service_type->details}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Audience</div>
        <div class="col-sm-7 item">
            @if($service_type->students) Students @endif
            @if($service_type->faculty_staff) Faculty/Staff @endif
            @if($service_type->community) Community @endif
            @if($service_type->alumni) Alumni @endif
        </div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Payment Type</div>
        <div class="col-sm-7 item">{{$service_type->payment_type}}</div>
    </div>
    @if($service_type->payment_type == 'Transfer Funds')
        <div class="row">
            <div class="col-sm-3 category">Accounting numbers</div>
            <div class="col-sm-7 item">{{$service_type->dept}}{{$service_type->fund}}  {{$service_type->class}}</div>
        </div><p></p>
    @endif
    @if($service_type->payment_type == 'Grant')
        <div class="row">
            <div class="col-sm-3 category">Grant Number</div>
            <div class="col-sm-7 item">{{$service_type->grant_number}}</div>
        </div><p></p>
    @endif
    <div class="row">
        <div class="col-sm-3 category">Description</div>
        <div class="col-sm-7 item">{{$service_type->job_description}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">No. of Copies</div>
        <div class="col-sm-7 item">{{$service_type->copies}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Date Needed</div>
        <div class="col-sm-7 item">{{$service_type->date_needed}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Project Type</div>
        <div class="col-sm-7 item">{{$service_type->services_needed}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Color or Black & White</div>
        <div class="col-sm-7 item">{{$service_type->color}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Documents</div>
        <div class="col-sm-7 item"><a href="{{$service_type->image}}">Link</a> </div>
    </div><p></p>

    {!! Form::open(['url' => 'update']) !!}
    {!! Form::hidden('service', $service) !!}
    {!! Form::hidden('services_id', $service_type->id) !!}

    <div class="row">
        <div class="col-sm-3 category">Status</div>
        <div class="col-sm-8 item">{!! Form::select('status', ['1' => 'Received', '2' => 'In Progress', '3' => 'Awaiting Information', '4' => 'Awaiting Review', '5' => 'Complete']
        , $service_type->status); !!}</div>
    </div>
</div>
</div>

@component('components.comments', (compact('comments')))
@endcomponent

@endsection
