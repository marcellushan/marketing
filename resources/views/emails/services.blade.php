@extends('layouts.app') @section('content')
    <div class="main container">
        <div class="row">
            <h2 class="col-sm-10">A Marketing Communications Service Request has been submitted.</h2>
        </div>
        <div class="row">
            <h3 class="col-sm-10">Client: {{$data->first_name}} {{$data->last_name}}</h3>
        </div>
        <div class="row">
            <h3 class="col-sm-10">Type: {{$service_name}}</h3>
        </div>
        <div class="row">
            <h3 class="col-sm-10">Details: {{$service_type->details}}</h3>
        </div>
        <div class="row">
            <h3 class="col-sm-10">Details: <a href="{{URL::to('/')}}/{{$view_folder}}/admin/{{Session::get('id')}}">Link</a></h3>
        </div>

    </div>
@endsection