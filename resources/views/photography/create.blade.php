@extends('layouts.app') @section('content')
<div class="main container">
    <h1>Photography</h1>
    {{Form::open(array('url' => 'photography','id'=>'photography'))}}

             <div class="row">
                 <div class="col-sm-10">
                     <div class="form-group">
                         <label>What/who needs to be photographed?</label>
                         <textarea class="form-control" rows="5" name="details"></textarea>
                     </div>
                 </div>
             </div>
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group">
                <label>Location</label>
                <input type="text" class="form-control" name="location">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label>Requested Shoot Date</label>
                <input type="date" class="form-control" name="requested_date" placeholder="YYYY-MM-DD">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Requested Start Time</label><br>
                @include('partials.start_time', ['start_or_end' => 'end'])

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Requested end Time</label><br>
                @include('partials.end_time', ['start_or_end' => 'end'])
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10">
            <div class="form-group">
                <label>How will the photos be used?</label>
                <textarea class="form-control" rows="5" name="use"></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3 col-sm-offset-4">
            <div class="form-group">
               <input type="submit" class="btn-default btn-sm"  id="confirm">
            </div>
        </div>

    </div>

</form>
</div>
@endsection
