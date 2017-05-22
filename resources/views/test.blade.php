@extends('layouts.app') @section('content')
    @component('comments')
    @slot('good')
    {{$data}}
@endslot
@endcomponent
@endsection

