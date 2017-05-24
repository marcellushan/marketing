@extends('layouts.app') @section('content')
<div class="main container">
    <div class="row">
        <div class="title col-md-10 col-md-offset-2">Press Release/Media Advisory</div>
    </div>
        <div class="row">
            <div class="col-sm-3 category">News Type</div>
            <div class="col-sm-8 item">
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
            </div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Significance</div>
            <div class="col-sm-8 item">{{$press_release->significant}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Professional and Corporate publication</div>
            <div class="col-sm-8 item">{{$press_release->professional}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Promotional materials</div>
            <div class="col-sm-8 item">{{$press_release->promotional}}</div>
        </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Audience</div>
        <div class="col-sm-8 item">
            @if($press_release->students) Students @endif
            @if($press_release->faculty_staff) Faculty/Staff @endif
            @if($press_release->community) Community @endif
            @if($press_release->alumni) Alumni @endif
        </div>
        </div>
    <div class="row">
        <h3 class="col-sm-10 category">Provide quotes</h3>
    </div>
    <div class="row">
        <div class="col-sm-3 category">Names</div>
        <div class="col-sm-8 item">{{$press_release->quote_names}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Emails</div>
        <div class="col-sm-8 item">{{$press_release->quote_emails}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Phone</div>
        <div class="col-sm-8 item">{{$press_release->quote_phones}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Documents</div>
        <div class="col-sm-8 item"><a href="{{$press_release->image}}" >Link</a></div>
    </div><p></p>
    {!! Form::open(['url' => 'update']) !!}
    {!! Form::hidden('service', $service) !!}
    {!! Form::hidden('services_id', $press_release->id) !!}

    <div class="row">
        <div class="col-sm-3 category">Status</div>
        <div class="col-sm-8 item">{!! Form::select('status', ['1' => 'Received', '2' => 'In Progress', '3' => 'Awaiting Information', '4' => 'Awaiting Review', '5' => 'Complete'], $press_release->status); !!}</div>
    </div>
</div>
</div>


        @component('components.comments', (compact('comments')))
        @endcomponent

        {!! Form::close() !!}

              <p>


@endsection
