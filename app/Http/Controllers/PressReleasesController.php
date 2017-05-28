<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class PressReleasesController extends BaseController
{
    const MEDIA_NAME = "Press Release";
    const MODEL_NAME = 'App\\PressReleases';
    const VIEW_FOLDER = 'press_release';
    const TABLE_NAME = 'press_releases';
    const MAIL = 'PressRelease';

}
