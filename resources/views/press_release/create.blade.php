@extends('layouts.app') @section('content')
<div class="main container">
    <h1 class="wrapper">Press Release/Media Advisory</h1>
            {{Form::open(array('url' => 'press_releases','files'=>'true'))}}

            <div class="row">
                <div class="col-xs-10 col-md-3 col-md-offset-2">
                    Student Feature
                </div>
                <div class="col-md-1">
                    <input type="checkbox" name="student_feature" value="1">
                </div>
                <div class="col-xs-10 col-md-3">
                    Departmental News
                </div>
                <div class="col-md-1">
                    <input type="checkbox" name="departmental_news" value="1">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-md-3 col-md-offset-2">
                    Student News
                </div>
                <div class="col-md-1">
                    <input type="checkbox" name="student_news" value="1">
                </div>
                <div class="col-xs-10 col-md-3">
                    College News
                </div>
                <div class="col-md-1">
                    <input type="checkbox" name="college_news" value="1">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-md-3 col-md-offset-2">
                    Alumni Feature
                </div>
                <div class="col-md-1">
                    <input type="checkbox" name="alumni_feature" value="1">
                </div>
                <div class="col-xs-10 col-md-3">
                   Research
                </div>
                <div class="col-md-1">
                    <input type="checkbox" name="research" value="1">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-md-3 col-md-offset-2">
                    Alumni News
                </div>
                <div class="col-md-1">
                    <input type="checkbox" name="alumni_news" value="1">
                </div>
                <div class="col-xs-10 col-md-3">
                    Recognition
                </div>
                <div class="col-md-1">
                    <input type="checkbox" name="recognition" value="1">
                </div>
            </div>
                 <div class="row">
                     <div class="col-xs-10 col-md-3 col-md-offset-2">
                         Employee Feature
                     </div>
                     <div class="col-md-1">
                         <input type="checkbox" name="enployee_feature" value="1">
                     </div>
                     <div class="col-xs-10 col-md-3">
                         Award
                     </div>
                     <div class="col-md-1">
                         <input type="checkbox" name="award" value="1">
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-xs-10 col-md-3 col-md-offset-2">
                         Employee News
                     </div>
                     <div class="col-md-1">
                         <input type="checkbox" name="employment_news" value="1">
                     </div>
                     <div class="col-xs-10 col-md-3">
                         Retirement (15-20 years plus)
                     </div>
                     <div class="col-md-1">
                         <input type="checkbox" name="retirement" value="1">
                     </div>
                 </div>
                @include('partials.textbox', ['title' => 'Why is this of significant news value? Briefly describe any key points', 'name' => 'significant'])
                @include('partials.textbox', ['title' => 'In addition to media, to what other professional and corporate publication should we submit this story?', 'name' => 'professional'])

                 <div class="row">
                     <div class="col-md-3 col-md-offset-2">
                         Did you have any promotional materials created for this request by the Marcom design team?
                         </div>
                     <div class="col-xs-5">
                         <div class="row">
                             <div class="col-md-6 col-xs-offset-2">
                                 Yes
                             </div>
                             <div class="col-md-1 col-xs-offset-2">
                                 <input type="radio" name="promotional" value="Yes">
                             </div>
                        </div>
                         <div class="row">
                             <div class="col-md-6 col-xs-offset-2">
                                 No
                             </div>
                             <div class="col-md-1 col-xs-offset-2">
                                 <input type="radio" name="promotional" value="No">
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-6 col-xs-offset-2">
                                 Request submitted, but I haven't received the final product
                             </div>
                             <div class="col-md-1 col-xs-offset-2">
                                 <input type="radio" name="promotional" value="Requested">
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-6 col-xs-offset-2">
                                 Not yet, but planning to
                             </div>
                             <div class="col-md-1 col-xs-offset-2">
                                 <input type="radio" name="promotional" value="Not yet">
                             </div>
                         </div>

                     </div>
                 </div>
                @include('partials.audience')
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        Please provide the name, email and
                        phone number of the individual(s)
                        who should be quoted in this piece or
                        recommended to media for answering
                        related questions.
                    </div>
                </div>
    @include('partials.textbox', ['title' => 'Names', 'name' => 'quote_names'])
    @include('partials.textbox', ['title' => 'Emails', 'name' => 'quote_emails'])
    @include('partials.textbox', ['title' => 'Phones', 'name' => 'quote_phones'])

    <div class="row">
        <div class="col-md-8 col-md-offset-4">
            Upload any supporting images/documents
            that are to be included.
        </div>
    </div>

    <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                        <h4>{{Form::file('image')}}</h4>
                    </div>
                </div>
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
