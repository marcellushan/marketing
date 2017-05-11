@extends('layouts.app') @section('content')
<div class="main container">
@foreach($clients as $client)
        {{$client->first_name}}{{$client->id}}
@endforeach
@endsection

