@extends('layouts.app') @section('content')
<div class="main container">
    <h3 >Press Release/Media Advisory</h3>
            {{Form::open(array('url' => 'press_release','files'=>'true'))}}

            <div class="row">
                <div class="col-xs-10 col-sm-4">
                    Student Feature
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="student_feature" value="1">
                </div>
                <div class="col-xs-10 col-sm-4">
                    Departmental News
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="departmental_news" value="1">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-sm-4">
                    Student News
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="student_news" value="1">
                </div>
                <div class="col-xs-10 col-sm-4">
                    College News
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="college_news" value="1">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-sm-4">
                    Alumni Feature
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="alumni_feature" value="1">
                </div>
                <div class="col-xs-10 col-sm-4">
                   Research
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="research" value="1">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-sm-4">
                    Alumni News
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="alumni_news" value="1">
                </div>
                <div class="col-xs-10 col-sm-4">
                    Recognition
                </div>
                <div class="col-sm-1">
                    <input type="checkbox" name="recognition" value="1">
                </div>
            </div>
                 <div class="row">
                     <div class="col-xs-10 col-sm-4">
                         Employee Feature
                     </div>
                     <div class="col-sm-1">
                         <input type="checkbox" name="enployee_feature" value="1">
                     </div>
                     <div class="col-xs-10 col-sm-4">
                         Award
                     </div>
                     <div class="col-sm-1">
                         <input type="checkbox" name="award" value="1">
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-xs-10 col-sm-4">
                         Employee News
                     </div>
                     <div class="col-sm-1">
                         <input type="checkbox" name="employment_news" value="1">
                     </div>
                     <div class="col-xs-10 col-sm-3">
                         Retirement (15-20 years plus)
                     </div>
                     <div class="col-sm-1">
                         <input type="checkbox" name="retirement" value="1">
                     </div>
                 </div>
                @include('partials.textbox', ['title' => 'Why is this of significant news value? Briefly describe any key points', 'name' => 'details'])
                @include('partials.textbox', ['title' => 'In addition to media, to what other professional and corporate publication should we submit this story?', 'name' => 'professional'])

                 <div class="row">
                     <div class="col-sm-8">
                         Did you have any promotional materials created for this request by the Marcom design team?
                         </div>
                     <div class="col-xs-10">
                         <div class="row">
                             <div class="col-sm-6 col-xs-offset-2">
                                 Yes
                             </div>
                             <div class="col-sm-1 col-xs-offset-2">
                                 <input type="radio" name="promotional" value="Yes">
                             </div>
                        </div>
                         <div class="row">
                             <div class="col-sm-6 col-xs-offset-2">
                                 No
                             </div>
                             <div class="col-sm-1 col-xs-offset-2">
                                 <input type="radio" name="promotional" value="No">
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-sm-6 col-xs-offset-2">
                                 Request submitted, but I haven't received the final product
                             </div>
                             <div class="col-sm-1 col-xs-offset-2">
                                 <input type="radio" name="promotional" value="Requested">
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-sm-6 col-xs-offset-2">
                                 Not yet, but planning to
                             </div>
                             <div class="col-sm-1 col-xs-offset-2">
                                 <input type="radio" name="promotional" value="Not yet">
                             </div>
                         </div>

                     </div>
                 </div>
                @include('partials.audience')
    <p></p>
                <div class="row">
                    <div class="col-sm-8">
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
        <div class="col-sm-8">
            Upload any supporting images/documents
            that are to be included.
        </div>
    </div>

    <div class="row">
                    <div class="col-sm-6">
                        <h4>{{Form::file('image')}}</h4>
                    </div>
                </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-3">
                    <div class="form-group">
                       <input type="submit" class="btn-default btn-lg">
                    </div>
                </div>
            </div>

</form>
</div>
@endsection
