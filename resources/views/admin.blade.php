@extends('layouts.app') @section('content')
    @include($view_folder . '.show')
    @include('partials.status')
    @component('components.previous_comments', (compact('comments')))
    @endcomponent
    @component('components.create_comment', (compact('comments')))
    @endcomponent
@endsection


