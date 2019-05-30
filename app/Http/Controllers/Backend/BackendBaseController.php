<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Arr;

class BackendBaseController extends BaseController
{
    protected $redirectTo;

    public function __construct()
    {
        parent::__construct();
        $this->template = 'backend' . $this->template;
    }

    public function renderOutput()
    {
        return parent::renderOutput();
    }

    public function redirectTo()
    {
        return redirect($this->redirectTo);
    }
}
