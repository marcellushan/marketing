@extends('layouts.app') @section('content')
<div class="main container">
    <h2>{{$media_name}}</h2>
    All {{count($datas)}}
    <div class="row">
        <div class="col-md-10">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Details
                        </th>
                        <th>
                            Due Date
                        </th>
                        <th>

                        </th>
                    </tr>
                    @foreach($datas as $data)
                        <tr>
                            <td>{{$data->last_name}}, {{$data->first_name}}</td>
                            <td>{{$data->details}}</td>
                            
                            <td>{{$data->due_date}}</td>
                            <td><a href="{{URL::to('/')}}/{{$view_folder}}/{{$data->id}}">Specifics</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
Received
    <div class="row">
        <div class="col-md-10">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Summary
                        </th>
                        <th>
                            Due Date
                        </th>
                        <th>

                        </th>
                    </tr>
                    @foreach($recieveds as $recieved)
                        <tr>
                            <td>{{$recieved->last_name}}, {{$recieved->first_name}}</td>
                            <td>{{$recieved->details}}</td>
                            <td>{{$recieved->due_date}}</td>
                            <td><a href="{{URL::to('/')}}/{{$view_folder}}/{{$recieved->id}}">Specifics</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @if(count($progresses) > 0)
    In Progress
    <div class="row">
        <div class="col-md-10">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Summary
                        </th>
                        <th>
                            Due Date
                        </th>
                        <th>

                        </th>
                    </tr>
                    @foreach($recieveds as $recieved)
                        <tr>
                            <td>{{$recieved->last_name}}, {{$recieved->first_name}}</td>
                            <td>{{$recieved->details}}</td>
                            <td>{{$recieved->due_date}}</td>
                            <td><a href="{{URL::to('/')}}/{{$view_folder}}/{{$recieved->id}}">Specifics</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endif
@endsection

