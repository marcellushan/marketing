@extends('layouts.app') @section('content')
<div class="main container">
    <h1 class="wrapper">Marketing Communications Service Form</h1>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="row">
            <h3 class="col-md-4 col-md-offset-2">First name

            </h3>
            <h3 class="col-md-4">Last name
                {{$press->image}}
            </h3>
        </div>

            
    <div class="row">
        <div class="col-md-3 col-md-offset-5">
            <div class="form-group">
               <input type="submit" class="btn-default btn-lg">
            </div>
        </div>

    </div>
</div>
@endsection
