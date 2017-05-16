@extends('layouts.app') @section('content')
<div class="main container">
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
            @foreach($clients as $client)
                <tr>
                    <td>{{$client->last_name}}, {{$client->first_name}}</td>
                    <td>{{$client->summary}}</td>
                    <td>{{$client->due_date}}</td>
                    <td><a href="{{URL::to('/')}}/admin/{{$client->id}}">Details</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

