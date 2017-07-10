@extends('layouts.app') @section('content')
<div class="main container">
    <h2>Press Releases</h2>
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

                        </th>
                    </tr>
                    @foreach($datas as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->details}}</td>
                            <td>{{$data->status}}</td>
                            <td><a href="{{URL::to('/')}}/press_release/status_show/{{$data->id}}">Details</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

