<div class="main container">
    <div class="well">
        {{--<div class="well">--}}
        {!! Form::open(['url' => 'update']) !!}
        {!! Form::hidden('service', $service) !!}
        {!! Form::hidden('services_id', $service_type->id) !!}
        {!! Form::hidden('clients_id', $service_type->clients_id) !!}
        {!! Form::hidden('view_folder', $view_folder) !!}
        {!! Form::hidden('service_name', $service_name) !!}

        <div class="row">
            <div class="col-sm-3 category">Status</div>
            <div class="col-sm-8 item">{!! Form::select('status', ['1' => 'Received', '2' => 'In Progress', '3' => 'Awaiting Information', '4' => 'Awaiting Review', '5' => 'Complete'], $service_type->status); !!}</div>
        </div>
    </div>