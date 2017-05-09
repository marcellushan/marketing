@extends('layouts.app') @section('content')
<div class="main container">
    <h1 class="wrapper">Marketing Communications Service Form</h1>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="row">
            <h3 class="col-md-4 col-md-offset-2">First name
                {{$data->first_name}}
            </h3>
            <h3 class="col-md-4">Last name
                {{$press->image}}
            </h3>
        </div>

             <div class="row">
                 <div class="col-md-8 col-md-offset-2">
                     <div class="form-group">
                         <label>Department</label>
                         <input type="text" class="form-control" name="department"value="{{$data->department}}">
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-8 col-md-offset-2">
                     <div class="form-group">
                         <label>Email Address</label>
                         <input type="email" class="form-control" name="email"value="{{$data->email}}">
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-8 col-md-offset-2">
                     <div class="form-group">
                         <label>Phone</label>
                         <input type="text" class="form-control" name="phone"value="{{$data->phone}}">
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-8 col-md-offset-2">
                     <div class="form-group">
                         <label>Request Due Date</label>
                         <input type="date" class="form-control" name="due_date"value="{{$data->due_date}}">
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-8 col-md-offset-2">
                     <div class="form-group">
                         <label>Brief Project Summary</label>
                         <textarea class="form-control" rows="5" name="summary">{{$data->summary}}</textarea>
                     </div>
                 </div>
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
