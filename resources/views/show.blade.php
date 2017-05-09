@extends('layouts.app') @section('content')
<div class="main container">
    <h1 class="wrapper">Marketing Communications Service Form</h1>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="row">
            <h3 class="col-md-4 col-md-offset-2">First name
                {{$data->first_name}}
            </h3>
            <h3 class="col-md-4">Last name
                {{$data->first_name}}
            </h3>
        </div>
    <div class="row">
        <h3 class="col-md-4 col-md-offset-2">Department
            {{$data->department}}
        </h3>
        <h3 class="col-md-4">Email Address
            {{$data->email}}
        </h3>
    </div>
    <div class="row">
        <h3 class="col-md-4 col-md-offset-2">Phone
            {{$data->phone}}
        </h3>
        <h3 class="col-md-4">Request Due Date
            {{$data->due_date}}
        </h3>
    </div>
    <br>
    <h3 align="center">Brief Project Summary</h3>
    <h3 class="item">{{$data->summary}}</h3>

    @if($press_release)
        <h2 align="center">Press Release/Media Advisory</h2>
        <h3 align="center">Why is this of significant news value? Briefly describe any key points.</h3>
        <h3 class="item">{{$press_release->significant}}</h3>
        <h3 align="center">In addition to media, to what other professional and corporate publication should we submit this story?</h3>
        <h3 class="item">{{$press_release->professional}}</h3>
        <h3 class="wrapper"><a href="{{$press_release->image}}" >Link</a></h3>
    @endif


    <div class="row">
        <div class="col-md-3 col-md-offset-5">
            <div class="form-group">
               <input type="submit" class="btn-default btn-lg">
            </div>
        </div>

    </div>
</div>
@endsection
