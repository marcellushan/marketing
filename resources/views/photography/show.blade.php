<div class="row">
    <div class="title col-md-10">Photography</div>
</div>
<div class="row">
    <div class="col-sm-3 category">What/who do you need photographed?</div>
    <div class="col-sm-8 item">
        {{$service_type->details}}
    </div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">Location</div>
    <div class="col-sm-8 item">{{$service_type->location}}</div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">How/where will you use the photos?</div>
    <div class="col-sm-8 item">{{$service_type->use}}</div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">Shoot schedule</div>
    <div class="col-sm-8 item">{{$service_type->requested_date}} Start Time {{$service_type->start}} End Time {{$service_type->end}}</div>
</div>
</div>
</div>
