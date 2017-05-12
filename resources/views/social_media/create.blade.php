@extends('layouts.app') @section('content')
<div class="main container">
        <h1 class="wrapper">Social Media</h1>
    {{Form::open(array('url' => 'social_media','files'=>'true'))}}
       <div class="row">
        <h3 class="col-md-6 col-md-offset-5">
            Request Type
        </h3>
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-3">
            Post Rotation&nbsp;
            <input type="radio" name="media_type" value="Post Rotation">
        </div>
        <div class="col-md-2">
            Single Post
            <input type="radio" name="media_type" value="Single Post">
        </div>
        <div class="col-md-2">
            Starting New Page
            <input type="radio" name="media_type" value="Starting New Page">
        </div>
    </div>
    @include('partials.audience')
    What does the post need to say?
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label>Facebook</label>
                <textarea class="form-control" rows="5" name="facebook_text"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label>Twitter</label>
                <textarea class="form-control" rows="5" name="twitter_text"></textarea>
            </div>
        </div>
    </div>
Do you have a graphic to accompany the post?
    <div class="row">
        <div class="col-md-2 col-md-offset-4">
            Yes&nbsp;
            <input type="radio" value="Yes">
        </div>
        <div class="col-md-2">
            No
            <input type="radio"value="No">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-4">
            <h4>{{Form::file('image')}}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label>What is the purpose of the page?</label>
                <textarea class="form-control" rows="5" name="purpose"></textarea>
            </div>
        </div>
    </div>
    Who will manage the page?
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label>Department</label>
                    <input type="text" class="form-control" name="department">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone">
                </div>
            </div>
        </div>
    @include('partials.social')
       <div class="row">
        <div class="col-md-3 col-md-offset-5">
            <div class="form-group">
                <input type="submit" class="btn-default btn-lg">
            </div>
        </div>
    </div>
@endsection
