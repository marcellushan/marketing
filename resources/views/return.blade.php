@extends('layouts.app') @section('content')
    @include($view_folder  . '.show')
    @include('partials.client_status')
    @component('components.previous_comments', (compact('comments')))
    {{--@component('components.create_comment', (compact('comments')))--}}
    @endcomponent
@endsection
