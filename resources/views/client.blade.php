@extends('layouts.app') @section('content')
    @include($view_folder  . '.show')
    @include('partials.client_status')
    @include('partials.accept')
@endsection
