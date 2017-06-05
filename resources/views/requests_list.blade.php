@extends('layouts.app') @section('content')
<div class="main container">
    <h2>{{$media_name}}</h2>
    <button id="all_button">Click to show All</button>Total:{{count($datas)}}<p></p>
    <div id="all">
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
    </div>
    @if(count($receiveds) > 0)
    <button id="received_button" class="btn-info btn-lg">Click to show Received</button><h2>Total:{{count($receiveds)}}</h2>
        <div id="received">
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
                        @foreach($receiveds as $received)
                            <tr>
                                <td>{{$received->last_name}}, {{$received->first_name}}</td>
                                <td>{{$received->details}}</td>
                                <td>{{$received->due_date}}</td>
                                <td><a href="{{URL::to('/')}}/{{$view_folder}}/{{$received->id}}">Specifics</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(count($progresses) > 0)
        <button id="progress_button">Click to show In Progress</button>Total:{{count($progresses)}}<p></p>
        <div id="progress">
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
                            @foreach($progresses as $progress)
                                <tr>
                                    <td>{{$progress->last_name}}, {{$progress->first_name}}</td>
                                    <td>{{$progress->details}}</td>
                                    <td>{{$progress->due_date}}</td>
                                    <td><a href="{{URL::to('/')}}/{{$view_folder}}/{{$progress->id}}">Specifics</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(count($informations) > 0)
        <button id="information_button">Click to show Awaiting Information</button>Total:{{count($informations)}}<p></p>
        <div id="information">
            Awaiting Information
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
                            @foreach($informations as $information)
                                <tr>
                                    <td>{{$information->last_name}}, {{$information->first_name}}</td>
                                    <td>{{$information->details}}</td>
                                    <td>{{$information->due_date}}</td>
                                    <td><a href="{{URL::to('/')}}/{{$view_folder}}/{{$information->id}}">Specifics</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(count($reviews) > 0)
        <button id="review_button">Click to show Awaiting Review</button>Total:{{count($reviews)}}<p></p>
        <div id="review">
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
                            @foreach($reviews as $review)
                                <tr>
                                    <td>{{$review->last_name}}, {{$review->first_name}}</td>
                                    <td>{{$review->details}}</td>
                                    <td>{{$review->due_date}}</td>
                                    <td><a href="{{URL::to('/')}}/{{$view_folder}}/{{$review->id}}">Specifics</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(count($completes) > 0)
        <button id="complete_button">Click to show Complete</button>Total:{{count($completes)}}<p></p>
        <div id="complete">
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
                            @foreach($completes as $complete)
                                <tr>
                                    <td>{{$complete->last_name}}, {{$complete->first_name}}</td>
                                    <td>{{$complete->details}}</td>
                                    <td>{{$complete->due_date}}</td>
                                    <td><a href="{{URL::to('/')}}/{{$view_folder}}/{{$complete->id}}">Specifics</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endif
@endsection

