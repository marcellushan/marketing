<<<<<<< HEAD
@extends('layouts.app') @section('content')
<div class="main container">
    <h1 class="wrapper">Marketing Communications Service Form</h1>
    <form action="{{URL::to('/')}}/travelers" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <div class="form-group">
                <label>First name</label>
                <input type="text" class="form-control" name="first_name">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Last name</label>
                <input type="text" class="form-control" name="last_name">
            </div>
        </div>
             <div class="row">
                 <div class="col-md-6 col-md-offset-3">
                     <div class="form-group">
                         <label>Department</label>
                         <input type="text" class="form-control" name="email">
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-6 col-md-offset-3">
                     <div class="form-group">
                         <label>Email Address</label>
                         <input type="email" class="form-control" name="email">
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-6 col-md-offset-3">
                     <div class="form-group">
                         <label>Phone</label>
                         <input type="text" class="form-control" name="email">
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-6 col-md-offset-3">
                     <div class="form-group">
                         <label>Request Due Date</label>
                         <input type="date" class="form-control" name="email">
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-6 col-md-offset-3">
                     <div class="form-group">
                         <label>Brief Project Summary</label>
                         <textarea class="form-control" rows="5"></textarea>
                     </div>
                 </div>
             </div>
         </div>
        <h4>
             <div class="row">
                 <div class="col-md-2 col-md-offset-2">
                        <label>Press Release/Media Advisory</label>
                     </div>
                 <div class="col-md-2">
                       <input type="checkbox">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label>Photography</label>
                         <input type="checkbox">
                     </div>
                 </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div class="form-group">
                    <label>Design & Printing</label>
                    <input type="checkbox">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Brief Project Summary</label>
                    <input type="checkbox">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div class="form-group">
                    <label>Brief Project Summary </label>
                    <input type="checkbox">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Brief Project Summary</label>
                    <input type="checkbox">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div class="form-group">
                    <label>Brief Project Summary </label>
                    <input type="checkbox">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Brief Project Summary</label>
                    <input type="checkbox">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div class="form-group">
                    <label>Brief Project Summary </label>
                    <input type="checkbox">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Brief Project Summary</label>
                    <input type="checkbox">
                </div>
            </div>
        </div>
        </h4>
    <div class="row">
        <div class="col-md-3 col-md-offset-5">
            <div class="form-group">
               <input type="submit" class="btn-default btn-lg">
            </div>
        </div>
    </div>

</form>
</div>
@endsection
