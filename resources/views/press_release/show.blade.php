@extends('layouts.app') @section('content')
<div class="main container">
        <h2>Press Release/Media Advisory</h2>
        <h3>News Type</h3>
        <div class="row">
            <h3 class="col-md-8">
                @if($press_release->student_feature) Student Feature @endif
                @if($press_release->departmental_news) Departmental News @endif
                @if($press_release->student_news) Student News @endif
                @if($press_release->college_news) College News @endif
                @if($press_release->alumni_feature) Alumni Feature @endif
                @if($press_release->research) Research @endif
                @if($press_release->alumni_news) Alumni News @endif
                @if($press_release->recognition) Recognition @endif
                @if($press_release->employee_feature) Employee Feature @endif
                @if($press_release->award) Award @endif
                @if($press_release->employee_news) Employee News @endif
                @if($press_release->retirement)Retirement @endif
            </h3>
        </div>
        <div class="row">
            <h3 class="col-md-8">Why is this of significant news value? Briefly describe any key points.</h3>
        </div>
        <div class="row">
         <h3 class="col-md-8">{{$press_release->significant}}</h3>
        </div>
        <div class="row">
            <h3 class="col-md-8">In addition to media, to what other professional and corporate publication should we submit this story?</h3>
            </div>
    <div class="row">
        <h3 class="col-md-8">{{$press_release->professional}}</h3>
        </div>
    <div class="row">
        <h3 class="col-md-8">Did you have any promotional materials
            created for this request by the
            Marcom design team?</h3>
        </div>
    <div class="row">
        <h3 class="col-md-8">{{$press_release->promotional}}</h3>
        </div>
    <div class="row">
        <h3 class="col-md-8">Audience</h3>
        </div>
    <div class="row">
        <h3 class="col-md-8">
            @if($press_release->students) Students @endif
            @if($press_release->faculty_staff) Faculty/Staff @endif
            @if($press_release->community) Community @endif
            @if($press_release->alumni) Alumni @endif
        </h3>
        </div>
    <div class="row">
        <h3 class="col-md-8">Please provide the name, email and
            phone number of the individual(s)
            who should be quoted in this piece or
            recommended to media for answering
            related questions.</h3>
        </div>
        <h3 class="col-md-8">{{$press_release->quote_names}}</h3>
        <h3 class="col-md-8">{{$press_release->quote_names}}</h3>
        <h3 class="col-md-8">{{$press_release->quote_names}}</h3>
    <h3 class="col-md-8">Upload any supporting images/documents
            that are to be included.</h3>
    <h3 class="col-md-8"><a href="{{$press_release->image}}" >Link</a></h3>



   <div class="row">
       <div class="col-md-3 col-md-offset-4">
    <button type="button" class="btn btn-success btn-lg">Submit</button>
           </div>
       <div class="col-md-3">
    {{--{!! Form::open(['url' => 'clients/' . $data->id, 'method' => 'delete']) !!}--}}
    <button type="submit" class="btn btn-success btn-lg">Cancel</button>
    </div>
   </div>
    {!! Form::close() !!}

                            <p>
@endsection
