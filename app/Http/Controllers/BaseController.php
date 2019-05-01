<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Route;
use Illuminate\Support\Arr;

class BaseController extends Controller
{
    protected $template;
    protected $vars;
    protected $page_title;
    protected $meta_description;
    protected $meta_keywords;

    protected $route_name;

    public function __construct()
    {
        $this->route_name = Route::getCurrentRoute() ? Route::getCurrentRoute()->getName() : null;
        $this->template = '.pages.' . $this->route_name;
    }

    protected function  renderOutput()
    {
        $data = $this->vars;

        if (!empty($data))
            return view($this->template, $data);
        else
            return view($this->template);
    }
}