@extends('layouts.app') @section('content')
<div class="main container">
    <div class="row">
        <div class="title col-md-10 col-md-offset-2">{{$service_name}}</div>
    </div>
        <div class="row">
            <div class="col-sm-3 category">News Type</div>
            <div class="col-sm-8 item">
                @if($service_type->student_feature) Student Feature @endif
                @if($service_type->departmental_news) Departmental News @endif
                @if($service_type->student_news) Student News @endif
                @if($service_type->college_news) College News @endif
                @if($service_type->alumni_feature) Alumni Feature @endif
                @if($service_type->research) Research @endif
                @if($service_type->alumni_news) Alumni News @endif
                @if($service_type->recognition) Recognition @endif
                @if($service_type->employee_feature) Employee Feature @endif
                @if($service_type->award) Award @endif
                @if($service_type->employee_news) Employee News @endif
                @if($service_type->retirement)Retirement @endif
            </div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Details</div>
            <div class="col-sm-8 item">{{$service_type->details}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Professional and Corporate publication</div>
            <div class="col-sm-8 item">{{$service_type->professional}}</div>
        </div><p></p>
        <div class="row">
            <div class="col-sm-3 category">Promotional materials</div>
            <div class="col-sm-8 item">{{$service_type->promotional}}</div>
        </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Audience</div>
        <div class="col-sm-8 item">
            @if($service_type->students) Students @endif
            @if($service_type->faculty_staff) Faculty/Staff @endif
            @if($service_type->community) Community @endif
            @if($service_type->alumni) Alumni @endif
        </div>
        </div>
    <div class="row">
        <h3 class="col-sm-10 category">Provide quotes</h3>
    </div>
    <div class="row">
        <div class="col-sm-3 category">Names</div>
        <div class="col-sm-8 item">{{$service_type->quote_names}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Emails</div>
        <div class="col-sm-8 item">{{$service_type->quote_emails}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Phone</div>
        <div class="col-sm-8 item">{{$service_type->quote_phones}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Documents</div>
        <div class="col-sm-8 item"><a href="{{$service_type->image}}" >Link</a></div>
    </div><p></p>
    {!! Form::open(['url' => 'update']) !!}
    {!! Form::hidden('service', $service) !!}
    {!! Form::hidden('services_id', $service_type->id) !!}

    <div class="row">
        <div class="col-sm-3 category">Status</div>
        <div class="col-sm-8 item">{!! Form::select('status', ['1' => 'Received', '2' => 'In Progress', '3' => 'Awaiting Information', '4' => 'Awaiting Review', '5' => 'Complete'], $service_type->status); !!}</div>
    </div>
</div>
</div>


        @component('components.comments', (compact('comments')))
        @endcomponent

        {!! Form::close() !!}

              <p>


@endsection
