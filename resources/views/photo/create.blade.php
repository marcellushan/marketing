@extends('layouts.app') @section('content')
<div class="main container">
    <h1 class="wrapper">Photography</h1>
    {{Form::open(array('url' => 'photography'))}}

             <div class="row">
                 <div class="col-lg-8 col-lg-offset-2">
                     <div class="form-group">
                         <label>What/who needs to be photographed?</label>
                         <textarea class="form-control" rows="5" name="requirements"></textarea>
                     </div>
                 </div>
             </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-group">
                <label>Location</label>
                <input type="text" class="form-control" name="location">
            </div>
        </div>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
            <div class="form-group">
                <label>Requested Shoot Date</label>
                <input type="date" class="form-control" name="requested_date">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label>Requested Start Time</label>
                <input type="time" class="form-control" name="start">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label>Requested end Time</label>
                <input type="time" class="form-control" name="end">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-group">
                <label>How will the photos be used?</label>
                <textarea class="form-control" rows="5" name="use"></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-lg-offset-5">
            <div class="form-group">
               <input type="submit" class="btn-default btn-lg">
            </div>
        </div>

    </div>

</form>
</div>
@endsection
