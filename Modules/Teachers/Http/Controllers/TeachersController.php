<?php

namespace Modules\Teachers\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data['title'] = 'Teachers Details';
        $data['back_button_route'] = route('home');
        $data['heading'] = 'Teachers Details';
        $data['header_button'] = route('teachers.create');
        $data['header_button_name'] = 'Add Teacher';
        $data['breadcrumbs'] =   '<a href="' . route('home') . '" class="text-decoration-none text-muted">Home</a> / <a href="" class="" active> Teachers </a>';

        return view('teachers::index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $data['title'] = 'Teachers | Add';
        $data['back_button_route'] = route('teachers.index');
        $data['heading'] = 'Add New Teachers';
        $data['header_button'] = false;
        $data['breadcrumbs'] =   '<a href="' . route('home') . '" class="text-decoration-none text-muted">Home</a> / <a href="' . route('teachers.index') . '" class="text-decoration-none text-muted" active> Teachers </a> / <a href="" class="" active> Add New Teachers </a>';

        return view('teachers::create', $data);
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
        return view('teachers::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('teachers::edit');
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
