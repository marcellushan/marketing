@extends('layouts.app') @section('content')
<div class="main container">
        <div class="row">
            <div class="title col-md-10 col-md-offset-2">Photography</div>
        </div>
        <div class="row">
            <div class="col-sm-3 category">What/who do you need photographed?</div>
            <div class="col-sm-8 item">
                {{$service_type->details}}
            </div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Location</div>
            <div class="col-sm-8 item">{{$service_type->location}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">How/where will you use the photos?</div>
            <div class="col-sm-8 item">{{$service_type->use}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Shoot schedule</div>
            <div class="col-sm-8 item">{{$service_type->requested_date}} Start Time {{$service_type->start}} End Time {{$service_type->end}}</div>
        </div>
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
