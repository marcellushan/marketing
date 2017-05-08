@extends('layouts.app') @section('content')
<div class="main container">
        <h1 class="wrapper">Videography</h1>
    {{Form::open(array('url' => 'videography'))}}
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-group">
                <label>What/who do you need a video of?</label>
                <textarea class="form-control" rows="5" name="requirements"></textarea>
            </div>
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
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-group">
                <label>Please provide details and purpose for video.</label>
                <textarea class="form-control" rows="5" name="purpose"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-group">
                <label>How/where will you use the video?</label>
                <textarea class="form-control" rows="5" name="use"></textarea>
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
@endsection
