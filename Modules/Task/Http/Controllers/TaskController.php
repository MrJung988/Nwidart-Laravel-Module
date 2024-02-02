<?php

namespace Modules\Task\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Yajra\DataTables\Facades\DataTables;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = Task::all();
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('title', function ($row) {
                        return $row->title;
                    })
                    ->addColumn('description', function ($row) {
                        return $row->description;
                    })
                    ->addColumn('status', function ($row) {
                        if ($row->completed) {
                            return '<span class="badge badge-dark">Completed</span>';
                        }
                        return '<span class="badge badge-info">Pending</span>';
                    })
                    ->addColumn('action', function ($data) {
                        return '<button class="text-center badge badge-sm border-0 badge-success complete-task" data-id=" ' . $data->id . ' " title="Complete Task"' . ($data->completed == 1 ? 'disabled' : '') . '><i class="fas fa-check"></i> Done</button>';
                        // return view('templates.index-action', [
                        //     'id' => $data->id, 'route' => 'admin.task.',
                        // ])->render();
                    })
                    ->escapeColumns('active')
                    ->make(true);
            }

            $data['title'] = 'Task';
            $data['heading'] = 'Task';
            $data['header_button'] = route('admin.task.create');
            $data['header_button_name'] = 'Add Task';
            $data['breadcrumbs'] =   '<a href="' . route('home') . '" class="text-decoration-none">Home</a> / <a href="" class="text-muted" active> Task </a>';

            // $data['tasks'] = Task::all();

            return view('task::index', $data);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $data['title'] = 'Task | Add';
        $data['back_button_route'] = route('admin.task.index');
        $data['heading'] = 'Add New Tasks';
        $data['header_button'] = false;
        $data['breadcrumbs'] =   '<a href="' . route('home') . '" class="text-decoration-none">Home</a> / <a href="' . route('admin.task.index') . '" class="text-decoration-none" active> Tasks </a> / <a href="" class="text-muted" active> Add New Task </a>';

        return view('task::create', $data);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        try {
            $validation = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
            ]);

            $task = Task::create([
                'title' => $validation['title'],
                'description' => $validation['description'],
            ]);

            return redirect()->route('admin.task.index')->with('success', 'Task created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('task::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('task::edit');
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

    public function complete($id)
    {
        $task = Task::find($id);
        $task->completed = 1;
        $task->save();

        return response()->json(['message' => 'Task completed successfully']);
    }
}
