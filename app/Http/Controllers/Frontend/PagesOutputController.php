<?php

namespace App\Http\Controllers\Frontend;

use App\ContactInformationSocials;
use App\Feedback;
use App\GalleryItem;
use App\NavItem;
use App\Page;
use App\PopularService;
use App\PvcProfile;
use App\PvcProfileCategory;
use App\Service;
use App\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Helpers\Grid as Grid;
use Illuminate\Support\Facades\Config;
use Cache;

class PagesOutputController extends FrontendBaseController
{
    protected $title_screen_size;
    protected $urn;
    protected $page;


    public function __construct()
    {
        parent::__construct();
        $this->title_screen_size = 'full';

        // поиск нужной страницы из базы данных через значение URN
        $urn = str_replace(url()->to(''), '', url()->current());
        if($urn)
        {
            $this->page = Page::where('urn', $urn)->firstOrFail();
        }
        else
            $this->page = Page::where('urn', '/')->first();
    }


    public function renderOutput()
    {
        $this->vars = Arr::add($this->vars, 'title_screen_size', $this->title_screen_size);

        $this->vars = Arr::add($this->vars, 'page', $this->page);

        return parent::renderOutput();
    }



    public function home()
    {
        return $this->renderOutput();
    }


    public function products($page_slug)
    {
        $this->template .= '.layouts.' . $page_slug;

        $this->page = Page::where('slug', $page_slug)->first();

        Cache::rememberForever('pvc_profile_categories', function () {
            return PvcProfileCategory::orderBy('ordering')->get();
        });
        $pvc_profile_categories = Cache::get('pvc_profile_categories');
        $this->vars = Arr::add($this->vars, 'pvc_profile_categories', $pvc_profile_categories);

        $items_counter = 0;
        $this->vars = Arr::add($this->vars, 'items_counter', $items_counter);

        return $this->renderOutput();
    }


    public function company($page_slug)
    {
        $this->template .= '.layouts.' . $page_slug;

        $this->page = Page::where('slug', $page_slug)->first();

        return $this->renderOutput();
    }


    public function contacts()
    {
        $this->title_screen_size = 'small';

        return $this->renderOutput();
    }


    public function feedback()
    {
        $this->title_screen_size = 'small';

        return $this->renderOutput();
    }

    public function thanks()
    {
        return $this->renderOutput();
    }
}
