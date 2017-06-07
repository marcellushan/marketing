@extends('layouts.app') @section('content')
    @include($view_folder  . '.show')
    @include('partials.client_status')
    @component('components.previous_comments', (compact('comments')))
    @endcomponent
@endsection
