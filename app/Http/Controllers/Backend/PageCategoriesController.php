<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Frontend\BackendBaseController;
use App\PagesCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class PageCategoriesController extends BackendBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = PagesCategory::all();
        $this->vars = Arr::add($this->vars, 'categories', $categories);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //dd($request->all());

        $data = $request->all();
        $data['slug'] = is_string($data['slug']) ? $data['slug'] :  Str::slug($data['name']);

        PagesCategory::create($data);

        return redirect()->route('page_categories.index');
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
        $category = PagesCategory::find($id);
        $this->vars = Arr::add($this->vars, 'category', $category);

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
        $category = PagesCategory::find($id);

        $data = $request->all();
        $data['slug'] = is_string($data['slug']) ? $data['slug'] :  Str::slug($data['name']);
        $category->update($data);

        return redirect()->route('page_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PagesCategory::destroy($id);

        return redirect()->route('page_categories.index');
    }
}
