@extends('layouts.app') @section('content')
<div class="main container">
        <h1 class="wrapper">Social Media</h1>
    {{Form::open(array('url' => 'social_media'))}}
       <div class="row">
        <h3 class="col-md-6 col-md-offset-5">
            Request Type
        </h3>
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-3">
            Post Rotation&nbsp;
            <input type="radio" name="request_type" value="1">
        </div>
        <div class="col-md-2">
            Single Post
            <input type="radio" name="request_type" value="1">
        </div>
        <div class="col-md-2">
            Starting a new page&nbsp;
            <input type="radio" name="request_type" value="1">
        </div>
    </div>
    <div class="row">
        <h3 class="col-md-6 col-md-offset-5">
            Audience
        </h3>
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-2">
            Students&nbsp;
            <input type="checkbox" name="students" value="1">
        </div>
        <div class="col-md-2">
            Faculty & Staff&nbsp;
            <input type="checkbox" name="faculty_staff" value="1">
        </div>
        <div class="col-md-2">
            Community&nbsp;
            <input type="checkbox" name="community" value="1">
        </div>
        <div class="col-md-2">
            Alumni&nbsp;
            <input type="checkbox" name="alumni" value="1">
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 col-md-offset-5">
            <div class="form-group">
                <input type="submit" class="btn-default btn-lg">
            </div>
        </div>
    </div>
@endsection
