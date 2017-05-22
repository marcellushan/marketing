@extends('layouts.app') @section('content')
<div class="main container">
<h2>Requests by Service</h2>
    <h3><a href="{{URL::to('/')}}/press_releases">Press Releases</a></h3>
    <h3><a href="{{URL::to('/')}}/design_printing">Design and Printing</a></h3>
    <h3><a href="{{URL::to('/')}}/photography">Photography</a></h3>
    <h3><a href="{{URL::to('/')}}/social_media">Social Media</a></h3>
    <h3><a href="{{URL::to('/')}}/videography">Videography</a></h3>
    <h3><a href="{{URL::to('/')}}/paid_advertising">Paid Advertising</a></h3>
    <h3><a href="{{URL::to('/')}}/presentation">Presentation</a></h3>
    <h3><a href="{{URL::to('/')}}/event">Event Aid</a></h3>

    </div>
@endsection

