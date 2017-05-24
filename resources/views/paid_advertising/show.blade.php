    @extends('layouts.app') @section('content')
        <div class="main container">
            <div class="row">
                <div class="title col-md-10 col-md-offset-2">Paid Advertising</div>
            </div>
            <div class="row">
                <div class="col-sm-3 category">What do you want to advertise?</div>
                <div class="col-sm-8 item">
                    {{$paid_advertising->ad_event}}
                </div>
            </div><p></p>
            <div class="row">
                <div class="col-sm-3 category">Audience</div>
                <div class="col-sm-8 item">
                    @if($paid_advertising->students) Students @endif
                    @if($paid_advertising->faculty_staff) Faculty/Staff @endif
                    @if($paid_advertising->community) Community @endif
                    @if($paid_advertising->alumni) Alumni @endif
                </div>
            </div><p></p>
            <div class="row">
                <div class="col-sm-3 category">Purpose</div>
                <div class="col-sm-8 item">{{$paid_advertising->purpose}}</div>
            </div><p></p>
            <div class="row">
                <div class="col-sm-3 category">How/where/when</div>
                <div class="col-sm-8 item">{{$paid_advertising->details}}</div>
            </div><p></p>
            <div class="row">
                <div class="col-sm-3 category">Options</div>
                <div class="col-sm-8 item">
                    @if($paid_advertising->social_media) Social Media @endif
                    @if($paid_advertising->print) Print @endif
                    @if($paid_advertising->billboard) Billboard @endif
                    @if($paid_advertising->digital) Digital @endif
                    @if($paid_advertising->other) Other @endif
                </div>
            </div><p></p>
            {!! Form::open(['url' => 'update']) !!}
            {!! Form::hidden('service', $service) !!}
            {!! Form::hidden('services_id', $paid_advertising->id) !!}

            <div class="row">
                <div class="col-sm-3 category">Status</div>
                <div class="col-sm-8 item">{!! Form::select('status', ['1' => 'Received', '2' => 'In Progress', '3' =>
        'Awaiting Information', '4' => 'Awaiting Review', '5' => 'Complete'], $paid_advertising->status); !!}</div>
            </div>
        </div>
</div>



@component('components.comments', (compact('comments')))
@endcomponent

{!! Form::close() !!}


@endsection

