<?php

namespace App\Http\Controllers\Frontend;

use App\ContactInformationSocials;
use App\Feedback;
use App\GalleryItem;
use App\NavItem;
use App\PopularService;
use App\Service;
use App\ServiceCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Arr;
use App\Helpers\Grid as Grid;
use Illuminate\Support\Facades\Config;

class PagesOutputController extends FrontendBaseController
{
    public function __construct()
    {
        parent::__construct();
    }


    public function home() {
        $this->template = 'frontend.pages.style.profiles';
        return $this->renderOutput();
    }
}
