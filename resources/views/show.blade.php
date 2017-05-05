@extends('layouts.app') @section('content')
<div class="main container">
    <h1 class="wrapper">Marketing Communications Service Form</h1>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <div class="form-group">
                <label>First name</label>
                <input type="text" class="form-control" name="first_name" value="{{$data->first_name}}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Last name</label>
                <input type="text" class="form-control" name="last_name" value="{{$data->last_name}}">
            </div>
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
            <h3 class="col-md-6 col-md-offset-5">
                Services
            </h3>
        </div>
        <h4>
    <div class="row">
        <div class="col-xs-10 col-md-3 col-md-offset-2">
            Press Release/Media Advisory
        </div>
        <div class="col-md-1">
            <input type="checkbox" name="press_release" value="1" {{$data->press_release ? 'checked' : ''}}>
        </div>
        <div class="col-xs-10 col-md-3">
            Paid Advertising
        </div>
        <div class="col-md-1">
            <input type="checkbox" name="paid_advertising" value="1">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-md-3 col-md-offset-2">
            Design & Printing
        </div>
        <div class="col-md-1">
            <input type="checkbox" name="design_printing" value="1">
        </div>
        <div class="col-xs-10 col-md-3">
            Presentation/Interview Preparation
        </div>
        <div class="col-md-1">
            <input type="checkbox" name="presentation" value="1">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-md-3 col-md-offset-2">
            Photography
        </div>
        <div class="col-md-1">
            <input type="checkbox" name="photography" value="1">
        </div>
        <div class="col-xs-10 col-md-3">
           Videography
        </div>
        <div class="col-md-1">
            <input type="checkbox" name="videography" value="1">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-md-3 col-md-offset-2">
            Social Media
        </div>
        <div class="col-md-1">
            <input type="checkbox" name="social_media" value="1">
        </div>
        <div class="col-xs-10 col-md-3">
            Event Aid
        </div>
        <div class="col-md-1">
            <input type="checkbox" name="event_aid" value="1">
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
