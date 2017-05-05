<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PressReleases extends Model
{
    protected $fillable = ['student_feature', 'departmental_news','student_news','college_news','alumni_feature','research','alumni_news',
        'recognition','employee_feature','award','employee_news','retirement','significant','professional','promotional','image'];
}
