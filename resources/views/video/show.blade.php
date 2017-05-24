@extends('layouts.app') @section('content')
    <div class="main container">
        <div class="row">
            <div class="title col-md-10 col-md-offset-2">Videography</div>
        </div>
        <div class="row">
            <div class="col-sm-3 category">What/who do you need video of?</div>
            <div class="col-sm-8 item">
                {{$videography->requirements}}
            </div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Audience</div>
            <div class="col-sm-8 item">
                @if($videography->students) Students @endif
                @if($videography->faculty_staff) Faculty/Staff @endif
                @if($videography->community) Community @endif
                @if($videography->alumni) Alumni @endif
                </div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Please provide details and purpose for video.</div>
            <div class="col-sm-8 item">{{$videography->purpose}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">How/where will you use the video?</div>
            <div class="col-sm-8 item">{{$videography->use}}</div>
        </div>
        {!! Form::open(['url' => 'update']) !!}
        {!! Form::hidden('service', $service) !!}
        {!! Form::hidden('services_id', $videography->id) !!}

        <div class="row">
            <div class="col-sm-3 category">Status</div>
            <div class="col-sm-8 item">{!! Form::select('status', ['1' => 'Received', '2' => 'In Progress', '3' =>
        'Awaiting Information', '4' => 'Awaiting Review', '5' => 'Complete'], $videography->status); !!}</div>
        </div>
    </div>
</div>



@component('components.comments', (compact('comments')))
@endcomponent

{!! Form::close() !!}






@endsection

