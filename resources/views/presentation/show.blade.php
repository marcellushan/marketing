<div class="row">
    <div class="title col-md-10 col-md-offset-2">{{$service_name}}</div>
</div>
<div class="row">
    <div class="col-sm-3 category">Details</div>
    <div class="col-sm-8 item">
        {{$service_type->details}}
    </div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">Audience</div>
    <div class="col-sm-8 item">
        @if($service_type->students) Students @endif
        @if($service_type->faculty_staff) Faculty/Staff @endif
        @if($service_type->community) Community @endif
        @if($service_type->alumni) Alumni @endif
    </div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">Date</div>
    <div class="col-sm-8 item">{{$service_type->presentation_date}}</div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">Area</div>
    <div class="col-sm-8 item">{{$service_type->area}}</div>
</div><p></p>
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
