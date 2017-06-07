<div class="well">
    @if($comments)
    <div class="row">
        <div class="col-sm-3 category">Previous Comments</div>
        <div class="col-sm-8 item">
            @foreach($comments as $comment)
                <div class="row">
                    <div class="col-md-8">
                        {{$comment->comment}}
                    </div>
                    <div class="col-md-2">
                    {{--{{date_format($comment->created_at, 'm/d/y')}}--}}
                    </div>
                    <div class="col-md-2">
                        {{$comment->users_id}}
                    </div>
                </div>
                <p></p>
            @endforeach
        </div>
    </div>
    @endif
