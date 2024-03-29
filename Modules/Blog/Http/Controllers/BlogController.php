<?php

namespace Modules\Blog\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Blog::all();
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('title', function($row) {
                return $row->title;
            })
            ->addColumn('slug', function($row) {
                return $row->slug;
            })
            ->addColumn('keywords', function($row) {
                return $row->keywords;
            })
            ->addColumn('action', function($row) {
                return '10';
            })
            ->make(true);
        }
        
        // $data['blogs'] = Blog::all();
        $data['title'] = 'Blogs';
        $data['heading'] = 'Blog';
        $data['header_button'] = route('users.create');
        $data['header_button_name'] = 'Add Blog';
        $data['breadcrumbs'] =   '<a href="' . route('home') . '" class="text-decoration-none">Home</a> / <a href="" class="text-muted" active> Blogs </a>';
        return view('blog::index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('blog::create');
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
        return view('blog::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('blog::edit');
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
