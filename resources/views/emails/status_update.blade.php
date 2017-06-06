@extends('layouts.app') @section('content')
    <div class="main container">
        <div class="row">
            <h2 class="col-sm-10">There has been an update to Your Marketing Communications Service Request</h2>
        </div>

            <h3>Status - {{$status}}</h3>
            <h3>Comments - {{$comment->comment or 'No Comments'}}</h3>






        </div>


    </div>
@endsection