@extends('layouts.app') @section('content')
<div class="main container">

    <h2 align="center">Paid Advertising</h2>
    <h3 align="center">What do you want to advertise?</h3>
    <h3 class="item">{{$paid_advertising->ad_event}}</h3>
    <h3 align="center">Audience</h3>
    <h3 class="item" align="center">
        @if($paid_advertising->students) Students @endif
        @if($paid_advertising->faculty_staff) Faculty/Staff @endif
        @if($paid_advertising->community) Community @endif
        @if($paid_advertising->alumni) Alumni @endif
    </h3>
    <h3 align="center">Please provide details and purpose for advertisement.</h3>
    <h3 class="item">{{$paid_advertising->purpose}}</h3>
    <h3 align="center">How/where/when do you see the advertisement
        being used?</h3>
    <h3 class="item">{{$paid_advertising->details}}</h3>
    <h3 align="center">Which advertising options seem appropriate?</h3>
    <h3 class="item" align="center">
        @if($paid_advertising->social_media) Social Media @endif
        @if($paid_advertising->print) Print @endif
        @if($paid_advertising->billboard) Billboard @endif
        @if($paid_advertising->digital) Digital @endif
        @if($paid_advertising->other) Other @endif
    </h3>
    <h3 align="center">Budget</h3>
    <h3 class="item wrapper">${{money_format('%i', $paid_advertising->budget)}}</h3>



@endsection
