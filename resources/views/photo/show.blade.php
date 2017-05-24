@extends('layouts.app') @section('content')
<div class="main container">
        <div class="row">
            <div class="title col-md-10 col-md-offset-2">Photography</div>
        </div>
        <div class="row">
            <div class="col-sm-3 category">What/who do you need photographed?</div>
            <div class="col-sm-8 item">
                {{$photography->requirements}}
            </div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Location</div>
            <div class="col-sm-8 item">{{$photography->location}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">How/where will you use the photos?</div>
            <div class="col-sm-8 item">{{$photography->use}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Shoot schedule</div>
            <div class="col-sm-8 item">{{$photography->requested_date}} Start Time {{$photography->start}} End Time {{$photography->end}}</div>
        </div>
        {!! Form::open(['url' => 'update']) !!}
        {!! Form::hidden('service', $service) !!}
        {!! Form::hidden('services_id', $photography->id) !!}

        <div class="row">
            <div class="col-sm-3 category">Status</div>
            <div class="col-sm-8 item">{!! Form::select('status', ['1' => 'Received', '2' => 'In Progress', '3' =>
            'Awaiting Information', '4' => 'Awaiting Review', '5' => 'Complete'], $photography->status); !!}</div>
        </div>
    </div>
</div>



@component('components.comments', (compact('comments')))
@endcomponent

{!! Form::close() !!}






@endsection
