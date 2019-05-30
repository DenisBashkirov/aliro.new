<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Frontend\BackendBaseController;
use App\NavDropdownItem;
use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;

class NavDropdownItemsController extends BackendBaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->redirectTo = route('nav_dropdown_items.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nav_dropdown_items = NavDropdownItem::orderBy('ordering')->get();
        $this->vars = Arr::add($this->vars, 'nav_dropdown_items', $nav_dropdown_items);

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

        $dropdown_items = NavDropdownItem::orderBy('ordering')->get();
        $this->vars = Arr::add($this->vars, 'dropdown_items', $dropdown_items);

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
        NavDropdownItem::create($request->all());

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
        //
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
        //
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
