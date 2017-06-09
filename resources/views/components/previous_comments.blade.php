<div class="well">
    @if($comments)
    <div class="row">
        <div class="col-sm-2 category">Comments</div>
        <div class="col-sm-8 item">
            @foreach($comments as $comment)
                <div class="row">
                    <div class="col-md-5">
                        {{$comment->comment or "No Comment"}}
                    </div>
                    <div class="col-md-3">
                        {{$comment->status}}
                    </div>
                    <div class="col-md-2">
                    {{date_format($comment->created_at, 'm/d/y')}}
                    </div>
                    <div class="col-md-2">
                        {{$comment->users_id or "No ID"}}
                    </div>
                </div>
                <p></p>
            @endforeach
        </div>
    </div>
    @endif
