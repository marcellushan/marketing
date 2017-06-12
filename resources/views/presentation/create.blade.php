@extends('layouts.app') @section('content')
<div class="main container">
        <h1>Presentation</h1>
    {{Form::open(array('url' => 'presentation','id'=>'presentation'))}}
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label>Where are you presenting or being interviewed and on what topic?</label>
                <textarea class="form-control" rows="5" name="details"></textarea>
            </div>
        </div>
    </div>
    @include('partials.audience')
    <p></p>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label>When is the presentation taking place?</label>
                <input type="date" class="form-control" name="presentation_date" placeholder="YYYY-MM-DD">
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-sm-8">
                <label>
                    Please check the areas you would like assistance in?
                </label>
            </div>
        </div>
    @include('partials.assistance_options')
    <p></p>
    <div class="row">
        <div class="col-sm-3 col-sm-offset-4">
            <div class="form-group">
                <input type="submit" class="btn-default btn-lg">
            </div>
        </div>
    </div>
@endsection
