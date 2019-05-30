<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Frontend\BackendBaseController;
use App\NavMenuItem;
use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;

class NavMenuItemsController extends BackendBaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->redirectTo = route('nav_menu_items.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu_items = NavMenuItem::all();
        $this->vars = Arr::add($this->vars, 'menu_items', $menu_items);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::all();
        $this->vars = Arr::add($this->vars, 'pages', $pages);

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
        NavMenuItem::create($request->all());

        return $this->redirectTo();
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
        $menu_item = NavMenuItem::find($id);
        $this->vars = Arr::add($this->vars, 'menu_item', $menu_item);

        $pages = Page::all();
        $this->vars = Arr::add($this->vars, 'pages', $pages);

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
        $menu_item = NavMenuItem::find($id);
        $menu_item->update($request->all());

        return $this->redirectTo();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
