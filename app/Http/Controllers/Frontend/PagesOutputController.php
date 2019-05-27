<?php

namespace App\Http\Controllers\Frontend;

use App\ContactInformationSocials;
use App\Feedback;
use App\GalleryItem;
use App\NavItem;
use App\PopularService;
use App\PvcProfile;
use App\PvcProfileCategory;
use App\Service;
use App\ServiceCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Arr;
use App\Helpers\Grid as Grid;
use Illuminate\Support\Facades\Config;

class PagesOutputController extends FrontendBaseController
{
    protected $title_screen_size;

    public function __construct()
    {
        parent::__construct();
        $this->template = 'frontend' . $this->template;

        $this->title_screen_size = 'full';
    }

    public function renderOutput()
    {
        $this->vars = Arr::add($this->vars, 'title_screen_size', $this->title_screen_size);

        return parent::renderOutput();
    }



    public function home()
    {
        $pvc_profile_categories = PvcProfileCategory::orderBy('ordering')->get();
        $this->vars = Arr::add($this->vars, 'pvc_profile_categories', $pvc_profile_categories);

        $items_counter = 0;
        $this->vars = Arr::add($this->vars, 'items_counter', $items_counter);

        return $this->renderOutput();
    }

    public function contacts()
    {
        $this->title_screen_size = 'small';

        return $this->renderOutput();
    }
}
