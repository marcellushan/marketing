@extends('layouts.app') @section('content')
    {!! Form::open(['url' => 'foo/bar']) !!}
        <div class="row">
            <div class="col-sm-5">
                <div class="form-group">
                    <label>First name</label>
                    <input type="text" class="form-control" name="first_name">
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Last name</label>
                    <input type="text" class="form-control" name="last_name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <div class="form-group">
                    <label>Department</label><br>
                    @include('partials.departments')
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone">
                </div>
            </div>
        </div>
    {{$_SESSION['username']}}
    {!! Form::close() !!}
@endsection