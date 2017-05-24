<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PressReleases extends Model
{
    protected $fillable = ['details','student_feature', 'departmental_news','student_news','college_news','alumni_feature','research','alumni_news',
        'recognition','employee_feature','award','employee_news','retirement','professional','promotional',
        'students','faculty_staff','community','quote_names','quote_emails','quote_names','image'];
}
