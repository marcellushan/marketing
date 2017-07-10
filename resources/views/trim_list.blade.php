@extends('layouts.app') @section('content')
<div class="main container">
    <h1 align="center">{{$media_name}}</h1>
<div class="row">
    <div class="col-md-6 col-md-offset-2">

    <table class="table">
        <tr>
            <th>
               Status
            </th>
            <th>
               Total
            </th>

        </tr>
        <tr>
            <td>
                Received
            </td>
            <td>
                <a href="{{URL::to('/')}}/press_release/request_status/received" >{{count($receiveds)}}</a>
            </td>
        </tr>
        <tr>
            <td>
                In Progress
            </td>
            <td>
                {{count($progresses)}}
            </td>
        </tr>
        <tr>
            <td>
                Awaiting Information
            </td>
            <td>
                {{count($progresses)}}
            </td>
        </tr>
        <tr>
            <td>
                Awaiting Review
            </td>
            <td>
                {{count($progresses)}}
            </td>
        </tr>
    </table>
        </div>
</div>

{{--<button id="all_button"  class="btn-info btn-lg">Click to show All Requests</button>--}}
{{--<p>Total Number of Requests:{{count($datas)}}<p></p>--}}
{{--<div id="all">--}}
{{--<div class="row">--}}
{{--<div class="col-md-10">--}}
{{--<div class="table-responsive">--}}
{{--<table class="table">--}}
{{--<tr>--}}
{{--<th>--}}
{{--Name--}}
{{--</th>--}}
{{--<th>--}}
{{--Details--}}
{{--</th>--}}
{{--<th>--}}

{{--</th>--}}
{{--</tr>--}}
{{--@foreach($datas as $data)--}}
{{--<tr>--}}
{{--<td>{{$data->last_name}}, {{$data->first_name}}</td>--}}
{{--<td>{{$data->details}}</td>--}}
{{--<td><a href="{{URL::to('/')}}/{{$view_folder}}/marcom_show/{{$data->id}}">Specifics</a></td>--}}
{{--</tr>--}}
{{--@endforeach--}}
{{--</table>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
@endsection

