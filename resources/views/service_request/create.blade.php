@extends('layouts.app') @section('content')

    <h1 align="center">Welcome {{$user->name}} to the application for requesting Marcom services.</h1><h2 align="center">We look forward to working with you on your next project.
    <br>If you have questions while submitting this form, please contact us at 706-295-6366 or 706-368-7710.</h2></div>
    <div class="well">
    <div class="row">
        <h2 class="col-sm-8 col-sm-offset-3">
            Marcom Service Form
        </h2>
    </div>
    {{Form::open(array('url' => 'service_request', 'id' => 'service_request'))}}
        {{Form::hidden('user_id', $user->id)}}
             <div class="row">
                 <div class="col-sm-8 col-sm-offset-2">
                     <div class="form-group">
                         <label>Brief Project Description</label>
                         <input type="text" class="form-control" name="summary" placeholder="required">
                         <strong>Description examples:</strong>  Preview day promotion, Highlands Writers Convention
                     </div>

                 </div>
             </div>


        <div class="row">
            <h3 class="col-sm-6 col-sm-offset-3">
                Services needed
            </h3>
        </div>
        <h4>
    <div class="row">
        <div class="col-xs-10 col-sm-4 col-sm-offset-1">
            Press Release/Media Advisory
        </div>
        <div class="col-sm-1">
            <input type="checkbox" name="service[]" value="press_release">
        </div>
        <div class="col-xs-10 col-sm-4 col-sm-offset-1">
            Videography
        </div>
        <div class="col-sm-1">
            <input type="checkbox" name="service[]" value="videography">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-sm-4 col-sm-offset-1">
            Design & Printing
        </div>
        <div class="col-sm-1">
            <input type="checkbox" name="service[]" value="design_printing">
        </div>
        <div class="col-xs-10 col-sm-4 col-sm-offset-1">
            Paid Advertising
        </div>
        <div class="col-sm-1">
            <input type="checkbox" name="service[]" value="paid_advertising">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-sm-4 col-sm-offset-1">
            Photography
        </div>
        <div class="col-sm-1">
            <input type="checkbox" name="service[]" value="photography">
        </div>
        <div class="col-xs-10 col-sm-4 col-sm-offset-1">
            Presentation/Interview Preparation
        </div>
        <div class="col-sm-1">
            <input type="checkbox" name="service[]" value="presentation">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-sm-4 col-sm-offset-1">
            Social Media
        </div>
        <div class="col-sm-1">
            <input type="checkbox" name="service[]" value="social_media">
        </div>
        <div class="col-xs-10 col-sm-4 col-sm-offset-1">
            Event Aid
        </div>
        <div class="col-sm-1">
            <input type="checkbox" name="service[]" value="event">
        </div>
    </div>
            <p></p>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="form-group">
               <input type="submit" class="btn-default btn-lg" value="Continue">
            </div>
        </div>

    </div>

</form>
</div>
@endsection
