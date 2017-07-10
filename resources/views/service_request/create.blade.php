@extends('layouts.app') @section('content')
<div class="main container">
    <div class="row">
        <h2 class="col-sm-8 col-sm-offset-3">
            Marcom Service Form
        </h2>
    </div>
    {{Form::open(array('url' => 'service_request', 'id' => 'service_request'))}}
             <div class="row">
                 <div class="col-sm-10">
                     <div class="form-group">
                         <label>Brief Project Summary</label>
                         <textarea class="form-control" rows="5" name="summary" placeholder="required"></textarea>
                     </div>
                 </div>
             </div>


        <div class="row">
            <h3 class="col-sm-6 col-sm-offset-3">
                Services
            </h3>
        </div>
        <h4>
    <div class="row">
        <div class="col-xs-10 col-sm-4">
            Press Release/Media Advisory
        </div>
        <div class="col-sm-1">
            <input type="checkbox" name="press_release" value="1">
        </div>
        <div class="col-xs-10 col-sm-4">
            Videography
        </div>
        <div class="col-sm-1">
            <input type="checkbox" name="videography" value="1">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-sm-4">
            Design & Printing
        </div>
        <div class="col-sm-1">
            <input type="checkbox" name="design_printing" value="1">
        </div>
        <div class="col-xs-10 col-sm-4">
            Paid Advertising
        </div>
        <div class="col-sm-1">
            <input type="checkbox" name="paid_advertising" value="1">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-sm-4">
            Photography
        </div>
        <div class="col-sm-1">
            <input type="checkbox" name="photography" value="1">
        </div>
        <div class="col-xs-10 col-sm-4">
            Presentation/Interview Preparation
        </div>
        <div class="col-sm-1">
            <input type="checkbox" name="presentation" value="1">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-sm-4">
            Social Media
        </div>
        <div class="col-sm-1">
            <input type="checkbox" name="social_media" value="1">
        </div>
        <div class="col-xs-10 col-sm-4">
            Event Aid
        </div>
        <div class="col-sm-1">
            <input type="checkbox" name="event" value="1">
        </div>
    </div>
            <p></p>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="form-group">
               <input type="submit" class="btn-default btn-lg">
            </div>
        </div>

    </div>

</form>
</div>
@endsection
