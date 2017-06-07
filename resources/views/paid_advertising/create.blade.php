@extends('layouts.app') @section('content')
<div class="main container">
        <h1>Paid Advertising</h1>
    {{Form::open(array('url' => 'paid_advertising','id'=>'paid_advertising'))}}
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group">
                <label>What do you want to advertise?</label>
                <textarea class="form-control" rows="5" name="ad_event"></textarea>
            </div>
        </div>
    </div>
    @include('partials.audience')
    <p></p>
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group">
                <label>Please provide details and purpose for advertisement</label>
                <textarea class="form-control" rows="5" name="purpose"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group">
                <label>How/where/when do you see the advertisement being used?</label>
                <textarea class="form-control" rows="5" name="details"></textarea>
            </div>
        </div>
    </div>
        <div class="row">
            <h3 class="col-sm-7">
                Which advertising options seem appropriate?
            </h3>
        </div>
        <div class="row">
            <div class="col-sm-2">
                Social Media&nbsp;
                <input type="checkbox" name="social_media" value="1">
            </div>
            <div class="col-sm-2">
                Print Ad
                <input type="checkbox" name="print" value="1">
            </div>
            <div class="col-sm-2">
                Billboard&nbsp;
                <input type="checkbox" name="billboard" value="1">
            </div>
            <div class="col-sm-2">
                Digital Ad&nbsp;
                <input type="checkbox" name="digital" value="1">
            </div>
            <div class="col-sm-2">
                Other&nbsp;
                <input type="checkbox" name="other" value="1">
            </div>
        </div>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-3">
            <div class="form-group">
                <label>Budget</label>
                <input type="text" class="form-control" name="budget">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 col-sm-offset-5">
            <div class="form-group">
                <input type="submit" class="btn-default btn-sm">
            </div>
        </div>
    </div>
@endsection
