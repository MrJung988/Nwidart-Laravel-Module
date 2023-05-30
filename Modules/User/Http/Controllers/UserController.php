<?php

namespace Modules\User\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data['users'] = User::all();

        return view('user::index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::create');
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
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('user::edit');
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


    public function updateStatus(Request $request)
    {
        // dd($request->all());
        // dd(date('Y-m-d H:i:s'));
        $selected_users_id =  $request->user_id;
        if ($selected_users_id) {
            $selected_users_id = $selected_users_id;
        } else {
            $selected_users_id = [];
        }

        // Find all users id
        $users_id = User::all();
        $all_users_id = [];

        foreach ($users_id as $user_id) {
            $all_users_id[] = (string) $user_id->id;
        }

        // Find unselected users id
        $unselected_users_id = array_merge(
            array_diff($all_users_id, $selected_users_id),
            array_diff($selected_users_id, $all_users_id)
        );

        // Set the value of status is 1 due to checked input form
        foreach ($selected_users_id as $selected_user_id) {
            if ($selected_user_id) {
                $user = User::find($selected_user_id);
                $user->status = 1;
                $user->updated_at = date('Y-m-d H:i:s');
                $user->save();
            }
        }

        // Set the value of status is 0 due to unchecked input form
        foreach ($unselected_users_id as $unselected_user_id) {
            if ($unselected_user_id) {
                $user = User::find($unselected_user_id);
                $user->status = 0;
                $user->updated_at = date('Y-m-d H:i:s');
                $user->save();
            }
        }

        Session::flash('success_message', 'Users Updated Successfully !!');
        return redirect()->route('users.index');
    }
}
