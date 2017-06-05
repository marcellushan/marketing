@extends('layouts.app') @section('content')
    @include($view_folder . '.show')
    @include('partials.status')
    @component('components.comments', (compact('comments')))
    @endcomponent
@endsection
