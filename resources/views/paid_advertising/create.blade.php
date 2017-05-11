@extends('layouts.app') @section('content')
<div class="main container">
        <h1 class="wrapper">Paid Advertising</h1>
    {{Form::open(array('url' => 'paid_advertising'))}}
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-group">
                <label>What do you want to advertise?</label>
                <textarea class="form-control" rows="5" name="ad_event"></textarea>
            </div>
        </div>
    </div>
    @include('partials.audience')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-group">
                <label>Please provide details and purpose for advertisement</label>
                <textarea class="form-control" rows="5" name="purpose"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-group">
                <label>How/where/when do you see the advertisement being used?</label>
                <textarea class="form-control" rows="5" name="details"></textarea>
            </div>
        </div>
    </div>
        <div class="row">
            <h3 class="col-md-7 col-md-offset-2">
                Which advertising options seem appropriate?
            </h3>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-1">
                Social Media&nbsp;
                <input type="checkbox" name="social_media" value="1">
            </div>
            <div class="col-md-2">
                Print Ad
                <input type="checkbox" name="print" value="1">
            </div>
            <div class="col-md-2">
                Billboard&nbsp;
                <input type="checkbox" name="billboard" value="1">
            </div>
            <div class="col-md-2">
                Digital Ad&nbsp;
                <input type="checkbox" name="digital" value="1">
            </div>
            <div class="col-md-2">
                Other&nbsp;
                <input type="checkbox" name="other" value="1">
            </div>
        </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
                <label>Budget</label>
                <input type="text" class="form-control" name="budget">
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
