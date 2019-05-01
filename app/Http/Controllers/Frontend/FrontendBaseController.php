<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Arr;

class FrontendBaseController extends BaseController
{
    public function renderOutput()
    {
        return parent::renderOutput();
    }
}
