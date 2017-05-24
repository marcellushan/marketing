<?php

namespace App\Http\Controllers;

use App\PaidAdvertising;
use Illuminate\Http\Request;


class PaidAdvertisingController extends BaseController
{
    const MEDIA_NAME = "Paid Advertising";
    const MODEL_NAME = 'App\\PaidAdvertising';
    const VIEW_FOLDER = 'paid_advertising';
    const TABLE_NAME = 'paid_advertisings';
}
