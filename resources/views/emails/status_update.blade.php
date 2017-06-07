@extends('layouts.app') @section('content')
    <div class="main container">
        <div class="row">
            <h2 class="col-sm-10">There has been an update to Your {{$media_name}} Marketing Communications Service Request</h2>
        </div>

            <h3>Status - {{$status}}</h3>
            <h3>Comments - {{$comment->comment or 'No Comments'}}</h3>
            <h3><a href="{{URL::to('/')}}/{{$view_folder}}/return_show/{{$data->clients_id}}">link</a> </h3>

        </div>


    </div>
@endsection