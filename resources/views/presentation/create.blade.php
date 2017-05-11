@extends('layouts.app') @section('content')
<div class="main container">
        <h1 class="wrapper">Presentation</h1>
    {{Form::open(array('url' => 'presentation'))}}
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-group">
                <label>Where are you presenting or being interviewed and on what topic?</label>
                <textarea class="form-control" rows="5" name="topic"></textarea>
            </div>
        </div>
    </div>
    @include('partials.audience')
    <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
            <div class="form-group">
                <label>When is the presentation taking place?</label>
                <input type="date" class="form-control" name="presentation_date">
            </div>
        </div>
        <div class="row">
            <h3 class="col-md-7 col-md-offset-2">
                Please check the areas you would like assistance in?
            </h3>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-2">
                Speech Writing&nbsp;
                <input type="radio" name="area" value="Speech Writing">
            </div>
            <div class="col-md-2">
                Talking Points Overview&nbsp;
                <input type="radio" name="area" value="Talking Points Overview">
            </div>
            <div class="col-md-2">
                Presentation Material&nbsp;
                <input type="radio" name="area" value="Presentation Material">
            </div>
            <div class="col-md-2">
                All&nbsp;
                <input type="radio" name="area" value="All">
            </div>
            <div class="col-md-2">
                Other&nbsp;
                <input type="radio" name="area" value="Other">
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