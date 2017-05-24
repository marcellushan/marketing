@extends('layouts.app') @section('content')
    <div class="main container">
        <div class="row">
            <div class="title col-md-10 col-md-offset-2">Presentation/Interview Preparation</div>
        </div>
        <div class="row">
            <div class="col-sm-3 category">Details</div>
            <div class="col-sm-8 item">
                {{$presentation->topic}}
            </div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Audience</div>
            <div class="col-sm-8 item">
                @if($presentation->students) Students @endif
                @if($presentation->faculty_staff) Faculty/Staff @endif
                @if($presentation->community) Community @endif
                @if($presentation->alumni) Alumni @endif
            </div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Date</div>
            <div class="col-sm-8 item">{{$presentation->presentation_date}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Area</div>
            <div class="col-sm-8 item">{{$presentation->area}}</div>
        </div><p></p>
        {!! Form::open(['url' => 'update']) !!}
        {!! Form::hidden('service', $service) !!}
        {!! Form::hidden('services_id', $presentation->id) !!}

        <div class="row">
            <div class="col-sm-3 category">Status</div>
            <div class="col-sm-8 item">{!! Form::select('status', ['1' => 'Received', '2' => 'In Progress', '3' =>
    'Awaiting Information', '4' => 'Awaiting Review', '5' => 'Complete'], $presentation->status); !!}</div>
        </div>
    </div>
</div>



@component('components.comments', (compact('comments')))
@endcomponent

{!! Form::close() !!}


@endsection
