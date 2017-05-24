    @extends('layouts.app') @section('content')
        <div class="main container">
            <div class="row">
                <div class="title col-md-10 col-md-offset-2">{{$service_name}}</div>
            </div>
            <div class="row">
                <div class="col-sm-3 category">GHC Event</div>
                <div class="col-sm-8 item">
                    @if($service_type->GHC) Yes @else No @endif
                </div>
            </div><p></p>
            <div class="row">
                <div class="col-sm-3 category">Event Name</div>
                <div class="col-sm-8 item">{{$service_type->details}}</div>
            </div><p></p>
            <div class="row">
                <div class="col-sm-3 category">Event Date and Time</div>
                <div class="col-sm-8 item">{{$service_type->event_date}} at {{$service_type->event_time}}</div>
            </div><p></p>
            <div class="row">
                <div class="col-sm-3 category">Display/Promotional Items Needed</div>
                <div class="col-sm-8 item">
                    @if($service_type->banners) Banners @endif
                    @if($service_type->table_clothes) Table Clothes @endif
                    @if($service_type->magazines) Easels @endif
                    @if($service_type->promo) Promotional Material @endif
                    @if($service_type->signs) Signs @endif
                    @if($service_type->recruitment) Recruitment Materials @endif
                    @if($service_type->other) Other @endif
                </div>
            </div><p></p>
            @if($service_type->other)
                <div class="row">
                    <div class="col-sm-3 category">Other Details</div>
                    <div class="col-sm-8 item">{{$service_type->other_details}}</div>
                </div><p></p>
            @endif
            @if($service_type->pickup_name)
                <div class="row">
                    <div class="col-sm-3 category">Pickup Person</div>
                    <div class="col-sm-8 item">Name:  {{$service_type->pickup_name}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-3 category"></div>
                    <div class="col-sm-8 item">Email:  {{$service_type->pickup_email}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-3 category"></div>
                    <div class="col-sm-8 item">Phone:  {{$service_type->pickup_phone}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-3 category"></div>
                    <div class="col-sm-8 item">Department:  {{$service_type->pickup_department}}</div>
                </div><p></p>
            @endif
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


