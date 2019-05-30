<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Frontend\BackendBaseController;
use App\Page;
use App\PagesCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;


class PagesController extends BackendBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        $this->vars = Arr::add($this->vars, 'pages', $pages);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = PagesCategory::orderBy('name')->get();
        $this->vars = Arr::add($this->vars, 'categories', $categories);

        return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = is_string($data['slug']) ? $data['slug'] :  Str::slug($data['name']);

        if(!is_string($data['urn']))
        {
            $data['urn'] = '/' . $data['slug'];
            if ($request->input('category_id'))
            {
                $category = PagesCategory::find($request->input('category_id'));
                $data['urn'] = '/' . $category->slug . $data['urn'];
            }
        }

        Page::create($data);

        return redirect()->route('pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        $this->vars = Arr::add($this->vars, 'page', $page);

        $categories = PagesCategory::orderBy('name')->get();
        $this->vars = Arr::add($this->vars, 'categories', $categories);

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::find($id);

        $data = $request->all();
        $data['slug'] = is_string($data['slug']) ? $data['slug'] :  Str::slug($data['name']);

        if(!is_string($data['urn']))
        {
            $data['urn'] = '/' . $data['slug'];
            if ($request->input('category_id'))
            {
                $category = PagesCategory::find($request->input('category_id'));
                $data['urn'] = '/' . $category->slug . $data['urn'];
            }
        }

        $page->update($data);

        return redirect()->route('pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::destroy($id);

        return redirect()->route('pages.index');
    }
}
