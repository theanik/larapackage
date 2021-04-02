<?php

namespace Modules\View\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('view::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('view::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('view::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('view::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
