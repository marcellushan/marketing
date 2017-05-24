    @extends('layouts.app') @section('content')
        <div class="main container">
            <div class="row">
                <div class="title col-md-10 col-md-offset-2">{{$service_name}}</div>
            </div>
            <div class="row">
                <div class="col-sm-3 category">What do you want to advertise?</div>
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
                <div class="col-sm-3 category">Purpose</div>
                <div class="col-sm-8 item">{{$service_type->purpose}}</div>
            </div><p></p>
            <div class="row">
                <div class="col-sm-3 category">How/where/when</div>
                <div class="col-sm-8 item">{{$service_type->details}}</div>
            </div><p></p>
            <div class="row">
                <div class="col-sm-3 category">Options</div>
                <div class="col-sm-8 item">
                    @if($service_type->social_media) Social Media @endif
                    @if($service_type->print) Print @endif
                    @if($service_type->billboard) Billboard @endif
                    @if($service_type->digital) Digital @endif
                    @if($service_type->other) Other @endif
                </div>
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



@component('components.comments', (compact('comments')))
@endcomponent

{!! Form::close() !!}


@endsection

