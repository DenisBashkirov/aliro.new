<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Arr;

class FrontendBaseController extends BaseController
{
    protected $header_bg;
    protected $header_unsticky;

    public function renderOutput()
    {
        $this->vars = Arr::add($this->vars, 'header_bg', $this->header_bg);
        $this->vars = Arr::add($this->vars, 'header_unsticky', $this->header_unsticky);
        $this->vars = Arr::add($this->vars, 'page_title', $this->page_title);
        $this->vars = Arr::add($this->vars, 'meta_description', $this->meta_description);
        $this->vars = Arr::add($this->vars, 'meta_keywords', $this->meta_keywords);

        return parent::renderOutput();
    }

    public function get_meta($instance)
    {
        $this->page_title = $instance->title;
        $this->meta_description = $instance->meta_description;
        $this->meta_keywords = $instance->meta_keywords;
    }
}
