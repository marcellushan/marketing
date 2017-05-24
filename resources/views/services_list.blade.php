@extends('layouts.app') @section('content')
<div class="main container">
    <h2 align="center">Services List</h2>
    <div class="row">
        <div class="col-sm-3 col-sm-offset-2">
            <h3><a href="{{URL::to('/')}}/press_releases"> Press Release</a></h3>
        </div>
        <div class="col-sm-3">
            <h3>Design and Printing</h3>
        </div>
        <div class="col-sm-3">
            <h3>Photography</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 col-sm-offset-2">
            <h3>Videography</h3>
        </div>
        <div class="col-sm-3">
            <h3>Paid Advertising</h3>
        </div>
        <div class="col-sm-3">
            <h3>Presentation</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 col-sm-offset-2">
            <h3>Social Media</h3>
        </div>
        <div class="col-sm-3">
            <h3>Event Aid</h3>
        </div>
    </div>
@endsection

