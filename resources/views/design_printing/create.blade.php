@extends('layouts.app') @section('content')
<div class="main container">
    {{Form::open(array('url' => 'design_printing','files'=>'true'))}}

    <div class="form-group col-md-12">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <h3>What do you need designed/printed?</h3>
                    <textarea class="form-control" rows="5" name="needs"></textarea>
                </div>
            </div>
        </div>

            @include('partials.audience')

            <div class="mybox">
                <!-- Text input-->
                <h3>PAYMENT TYPE:</h3>

                <div class="row">
                    <div class="col-md-3">
                        <input type="radio" name="payment_type" value="Purchase Order" />Purchase Order*<br>
                    </div>
                    <div class="col-md-3">
                        <input type="radio" name="payment_type" value="Credit Card"  />Credit Card*<br>
                    </div>
                    <div class="col-md-3">
                        <input type="radio" name="payment_type" value="Transfer Funds"  />Transfer Funds**<br>
                    </div>
                    <div class="col-md-3">
                        <input type="radio" name="payment_type" value="Grant"  />Grant<br>
                    </div>
                </div>
                <h5>*Purchase Order or Credit Card required when using outside vendor</h5>  <h5>**Transfer Funds when all work is completed in-house.</h5>
                <div id="transfer">
                    <h4>REQUIRED WHEN DOING A TRANSFER OF FUNDS</h4>
        <p>
            <input  name="dept" type="text" minlength="7" maxlength="7" size="10" placeholder="Dept" class="fund">
            <input  name="fund" type="text" minlength="5" maxlength="5" size="10" placeholder="Fund" class="fund">
            <input  name="program" type="text" minlength="5" maxlength="5" size="10" placeholder="Program" class="fund">
            <input  name="class" type="text" minlength="5"maxlength="5" size="10" placeholder="Class" class="fund">
        <p>
    </div>
    <div id="grant">
        <div class="row">
            <div class="col-md-5">
                <!-- Text input-->

                <h4>GRANT NUMBER IS REQUIRED</h4>
            </div>
            <div class="col-md-7">
                <input name="grant_number" type="text"  maxlength="20" placeholder="Grant Number (required)" class="form-control" id="grant_field" value="<? echo @$_POST['empName'] ?>">
            </div>
        </div>
    </div>
</div>
<p>

    <label for="usr"><div class="column_header">Job Description</div></label>
    <textarea class="form-control" rows="3" id="jobDesc" name="job_description" placeholder="Required" ></textarea>
<p>
<div class="row">
    <div class="col-md-5">
        <label for="usr"><div class="column_header">No. of Copies</div></label>
        <input  name="copies" type="text" size="10" >
    </div>
    <div class="col-md-6">
        <label for="usr"><div class="column_header">Date Needed: </div></label><input type="date" id="startDate" id="startDate"
                                                                                      placeholder="mm/dd/yyyy" name="date_needed" min="2015-10-20" ><br>
    </div>
</div>
<br />
<div class="mybox">
    <div class="column_header">Please check services needed:</div>
    <div class="row">
        <div class="col-xs-6">
            <input type="radio" name="services_needed" value="New Project"  />New Project<br>
            <input type="radio" name="services_needed" value="Reprint as is"  />Reprint as is<br>
            <input type="radio" name="services_needed" value="Reprint with changes"  />Reprint with changes<br>
        </div>
        <div class="col-xs-6">
            <input type="radio" name="color" value="Black and White"  />Black & White<br>
            <input type="radio" name="color" value="Color"  />Color<br>
        </div>

    </div>
</div>

<br>
<div class="emphatic">Please attach all materials here.</div>


<br>
<input type="file" name="image" id="fileToUpload"><br>

<div class="order">

    If there is more than one image, cut and paste them into a single document. If you have any questions contact <a href="mailto:kdavis@highlands.edu">Ken Davis</a> (Print Shop)</div>
</div>
<input type="submit" class="btn btn-primary btn-lg center-block" value="Submit" />


</div>
</form>


@endsection
