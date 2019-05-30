<?php

namespace App\Http\Controllers\Frontend;

use App\NavMenuItem;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Arr;

class FrontendBaseController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->template = 'frontend' . $this->template;
    }

    public function renderOutput()
    {
        $menu_items = NavMenuItem::orderBy('ordering')->get();
        $this->vars = Arr::add($this->vars, 'menu_items', $menu_items);

        return parent::renderOutput();
    }
}
