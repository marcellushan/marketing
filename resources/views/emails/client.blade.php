@extends('layouts.app') @section('content')
    <div class="main container">
        <div class="row">
            <h2 class="col-sm-10">Your Marketing Communications Service Request has been Received</h2>
        </div>
        <h3><a href="{{URL::to('/')}}/clients/{{$data->id}}">link</a> </h3>


    </div>
@endsection